<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Organization;
use App\Rodeo;
use DB;

class ProducerHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index( Request $request, Organization $organization )
    {
        $data['organization'] = $organization;

        if( Gate::allows('access-level-2-for-organization', $organization) )
        {
            // $rodeos = Rodeo::select('id','name','starts_at')->orderBy('id','DESC')->get();
            $rodeos = DB::select(DB::raw("SELECT rodeos.id, rodeos.name, rodeos.starts_at, count(contestants.id) as 'count' FROM `contestants`
                LEFT JOIN competition_entries ON competition_entries.contestant_id = contestants.id
                LEFT JOIN competitions ON competition_entries.competition_id = competitions.id
                LEFT JOIN rodeos ON competitions.rodeo_id = rodeos.id
                LEFT JOIN groups ON groups.id = competitions.group_id
                LEFT JOIN events ON events.id = competitions.event_id
                WHERE events.id NOT IN (24,26,27,28,29,30,31,32)
                GROUP BY rodeos.id,rodeos.name,rodeos.starts_at
                ORDER BY rodeos.id DESC"));
            return view('L2.home', $data)->with('rodeos',$rodeos);
        }

        if( Gate::allows('access-level-3-for-organization', $organization) )        
        {
            return view('L3.home', $data);
        }
        
        abort(403, 'You must have secretary or data entry access for this organization.');
    }
    public function sheet_date(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $requestType = $data['requestType'];
            switch ($requestType) {
                case 'getDateTime':
                    $DateTime = $data['getDateTime'];
                    $getID = $data['getID'];
                    $checks = DB::table('judge_sheet')->select('judge_id')->get();
                    $ids = [];
                    foreach ($checks as $check) {
                       $ids[] =  $check->judge_id;
                    }

                    // echo"<pre>";print_r($ids);

                    // die;
                    if(in_array($getID, $ids)){
                        DB::table('judge_sheet')->where(['judge_id' => $getID])->update(
                            ['judge_date' => $DateTime]
                        );
                    }else{
                        DB::table('judge_sheet')->insert(
                            ['judge_date' => $DateTime, 'judge_id' => $getID, 'type' => 0]
                        );
                    }
                    return response()->json([
                        'success' => 'saved',
                        'time' => $DateTime,
                        'getID' => $getID,
                    ]);
                break;
                
                default:
                # code...
                break;
            }
            // echo"<pre>";print_r($data);die;
        }
    }
    public function getCount(Request $request){
        if ($request->ajax()) {
            $data = $request->all();
            $requestType = $data['requestType'];
            switch ($requestType) {
                case 'getStockCount':
                    $rodeosId = $data['rodeosId'];
                    $getRodeo = Rodeo::where('id',$rodeosId)->select('name')->first();
                    $getStockCount = DB::table('contestants')->select(DB::raw('count(contestants.id) as count'))
                    ->leftJoin('competition_entries', 'competition_entries.contestant_id', '=', 'contestants.id')
                    ->leftJoin('competitions', 'competition_entries.competition_id', '=', 'competitions.id')
                    ->leftJoin('rodeos', 'competitions.rodeo_id', '=', 'rodeos.id')
                    ->leftJoin('groups', 'groups.id', '=', 'competitions.group_id')
                    ->leftJoin('events', 'events.id', '=', 'competitions.event_id')
                    ->whereNotIn('events.id',[24,26,27,28,29,30,31,32])->where('rodeos.id',$rodeosId)->first();
                    $getStockCountByDay = DB::table('contestants')->select(DB::raw('rodeos.id, competition_instances.starts_at as day, COUNT(contestants.id) as count'))
                    ->leftJoin('competition_entries', 'competition_entries.contestant_id', '=', 'contestants.id')
                    ->leftJoin('competition_instances', 'competition_instances.id', '=', 'competition_entries.instance_id')
                    ->leftJoin('competitions', 'competition_entries.competition_id', '=', 'competitions.id')
                    ->leftJoin('groups as a', 'a.id', '=', 'competitions.group_id')
                    ->leftJoin('rodeos', 'competitions.rodeo_id', '=', 'rodeos.id')
                    ->leftJoin('groups', 'groups.id', '=', 'competitions.group_id')
                    ->leftJoin('events', 'events.id', '=', 'competitions.event_id')
                    ->whereNotIn('events.id',[24,26,27,28,29,30,31,32])->where('rodeos.id',$rodeosId)
                    ->groupBy('rodeos.id','competition_instances.starts_at')
                    ->orderBy('day', 'desc')->get();
                    // $getStockCountGroupBy = DB::table('contestants')->select(DB::raw('groups.name as group_name, events.name as event_name, competition_instances.starts_at as day, COUNT(contestants.id) as count'))
                    // ->leftJoin('competition_entries', 'competition_entries.contestant_id', '=', 'contestants.id')
                    // ->leftJoin('competition_instances', 'competition_instances.id', '=', 'competition_entries.instance_id')
                    // ->leftJoin('competitions', 'competition_entries.competition_id', '=', 'competitions.id')
                    // ->leftJoin('groups as a', 'a.id', '=', 'competitions.group_id')
                    // ->leftJoin('rodeos', 'competitions.rodeo_id', '=', 'rodeos.id')
                    // ->leftJoin('groups', 'groups.id', '=', 'competitions.group_id')
                    // ->leftJoin('events', 'events.id', '=', 'competitions.event_id')
                    // ->whereNotIn('events.id',[24,26,27,28,29,30,31,32])->where('rodeos.id',$rodeosId)
                    // ->groupBy('groups.name','events.name','competition_instances.starts_at')
                    // ->orderBy(['groups.name'=>'asc','competition_instances.starts_at'=>'desc'])
                    // ->get();
                    $getStockCountGroupBy = DB::select(DB::raw("SELECT groups.name as 'group_name', events.name as 'event_name', competition_instances.starts_at as 'day', count(contestants.id) AS 'count' FROM `contestants` LEFT JOIN competition_entries ON competition_entries.contestant_id = contestants.id LEFT JOIN competition_instances ON competition_instances.id = competition_entries.instance_id LEFT JOIN competitions ON competition_entries.competition_id = competitions.id LEFT JOIN groups a ON a.id = competitions.group_id LEFT JOIN rodeos ON competitions.rodeo_id = rodeos.id LEFT JOIN groups ON groups.id = competitions.group_id LEFT JOIN events ON events.id = competitions.event_id WHERE events.id NOT IN (24,26,27,28,29,30,31,32) AND rodeos.id = '$rodeosId' GROUP BY groups.name, events.name, competition_instances.starts_at ORDER BY FIELD(groups.name,'PeeWee', '7U', '10U', '14U', '19U'), competition_instances.starts_at, groups.name
                        "));
                    return response()->json([
                        'rodeo_name' => 'Selected Rodeo: '.$getRodeo->name,
                        'total_runs' => $getStockCount->count,
                        'getStockCountByDay' => $getStockCountByDay,
                        'getStockCountGroupBy' => $getStockCountGroupBy,
                        '_token' => $data['_token'],
                    ]);
                break;
                case 'getContestantCount':
                    $rodeosCId = $data['rodeosCId'];
                    $getRodeo = Rodeo::where('id',$rodeosCId)->select('name')->first();
                    $getContestantCount = DB::table('contestants')->select(DB::raw('count(contestants.id) as count'))
                    ->leftJoin('competition_entries', 'competition_entries.contestant_id', '=', 'contestants.id')
                    ->leftJoin('competitions', 'competition_entries.competition_id', '=', 'competitions.id')
                    ->leftJoin('rodeos', 'competitions.rodeo_id', '=', 'rodeos.id')
                    ->leftJoin('groups', 'groups.id', '=', 'competitions.group_id')
                    ->leftJoin('events', 'events.id', '=', 'competitions.event_id')
                    ->whereNotIn('events.id',[24,26,27,28,29,30,31,32])->where('rodeos.id',$rodeosCId)->get();
                    $getContestantGroupBy = DB::select(DB::raw("SELECT contestants.last_name, contestants.first_name, groups.name AS 'Group', events.name AS 'Event', competition_instances.starts_at AS 'DAY' FROM `contestants` 
                        LEFT JOIN competition_entries ON competition_entries.contestant_id = contestants.id 
                        LEFT JOIN competitions ON competition_entries.competition_id = competitions.id 
                        LEFT JOIN competition_instances ON competition_instances.id = competition_entries.instance_id LEFT JOIN rodeos ON competitions.rodeo_id = rodeos.id 
                        LEFT JOIN groups ON groups.id = competitions.group_id LEFT JOIN events ON events .id = competitions.event_id 
                        WHERE events.id NOT IN (24,26,27,28,29,30,31,32) AND rodeos.id ='$rodeosCId'
                        ORDER BY contestants.last_name"));
                    return response()->json([
                        'rodeo_name' => 'Selected Rodeo: '.$getRodeo->name,
                        'totalContestantsCount' => $getContestantCount[0]->count,
                        'getContestantGroupBy' => $getContestantGroupBy,
                        '_token' => $data['_token'],
                    ]);
                break;
                
                default:
                # code...
                break;
            }
        }
    }
}
