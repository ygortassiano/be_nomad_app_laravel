<?php

namespace be_nomad_app\Http\Controllers;

use Illuminate\Http\Request;
use be_nomad_app\User;
use be_nomad_app\Destinations;
use be_nomad_app\Booking;
use be_nomad_app\Role;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DestinationsController extends Controller
{
    //
    public function __construct(){
        //$this->authorize('validate_user',Auth::user());

        /*$destinations = User::all();
        $role = Role::where('id',1)->first();
        //dd($role->name);
        foreach($destinations as $destination)            
        $user_role = $destination->role;
        if (Auth::check() && $user_role == $role->user_id) {
            dd($user_role);
                //return view('partner_pages.partner_listing',compact('destinations'));
        }else{
            return view('welcome');
        }*/
    }

    public function index(){

        $destinations = Destinations::get();

        return view('welcome',compact('destinations'));


    }

    public function store(){

        //dd(request()->all());
        //dd(request()->onde);
        //$onde = request('onde');
        /*
        traz data e lugar 
        valida quais lugares estao disponiveisl nessa data --- query disponibilidade 
        traz os ids 
        procura os ids validos na tabela destinations
        //SELECT ID FROM DESTINATION 
         WHERE limit_bookings < (
         select count(destionation_id) as count_retorno from bookings where desttination_id = id and booking_date = data_search
        )

            Destinations::where('limit_bookings','<',function($query){
        $query->select('count(destionation_id) as count_retorno')
                     ->from('booking')
                     ->where('desttination_id','id')
                     ->where('booking_date','data_search')
                     ->groupBy('status')
                     })->get();


                        $seach_consult = Destinations::where('limit_bookings',function($query){
                        $query->select(Booking::raw('count(destination_id)'));
                        //->from(with(new Booking)->getTable())
                        //->where('destination_id','id');
                        //->where('booking_date','data_search');
                    })->get();

        */
       
        //retorno = DB::select(DB::raw('select * from (select destination_id,count(destination_id) as retorno, date(date_add(sysdate(),INTERVAL -1 DAY )) from bookings where date(booking_date) = date(date_add(sysdate(),INTERVAL -1 DAY )) group by destination_id) a join destinations b on a.destination_id = b.id where b.limit_booking > a.retorno'));
        //dd(request()->all());
        $location_search = request()->location_search;
        $date_search = request()->date_search;

        $destinations = DB::select("SELECT * 
                                FROM (select destination_id,count(destination_id) AS retorno 
                                FROM bookings 
                               WHERE date(booking_date) = STR_TO_DATE(:date,'%Y-%m-%d') 
                            GROUP BY destination_id) a join destinations b 
                                  ON a.destination_id = b.id 
                               WHERE b.limit_booking > a.retorno 
                                 AND b.city = :location_search ",
        ['date' => $date_search,'location_search'=>$location_search]);

        //$results = DB::select('SELECT HOUR(created_at) as hour, COUNT(*) as count FROM visited WHERE created_at >= DATE_SUB(NOW(),INTERVAL :days DAY) GROUP BY HOUR(created_at)', ['days' => 16]);

        //$destinations = Destinations::where('city',request()->location_search)->get();

        
        //dd($retorno);
        return view('destination_pages.destinations_list',compact('destinations'));
    }

    public function register()
    {
        
        $destinations = User::all();
        $role = Role::where('id',1)->first();
        //dd($role->name);
        foreach($destinations as $destination)            
        $user_role = $destination->role;
        
        //$this->authorize('validate_user',Auth::user());
        //dd($user_role);
        return view('partner_pages.partner_listing',compact('destinations'));
      
        
    }

    public function show($id){
        $destinations = Destinations::where('id',$id)->get();

        return view('destination_pages.destinations_details',compact('destinations'));
    }



}
