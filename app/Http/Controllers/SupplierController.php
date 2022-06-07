<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function inde()
    {
        // $post = DB::select('select * from suppliers');
        // $pagina = DB::table('suppliers')->paginate(2);
        $post = DB::table('suppliers')->paginate(2);

        return view('employee.Home',[
            'post' => $post
            
        ]);
    }

    public function showForm()
    {
        return view('employee.user');
    }

    public function addUser(Request $request)

    {
       $data = new supplier;
       
       $data->username=$request->username;

       $data->email=$request->email;

       $data->phone=$request->phone;

       $data->gender=$request->gender;

       $data->save();

       return redirect('/')->with('message','Employee added successfully');
    //    ;
    }

    // public function show()
    // {
    //     return users::all();
    // }

    public function update_employee($id)
    {
        $employee = DB::table('suppliers')->where('id',$id)->get();
        return view('employee.includes.update_employ',[
            'employee' => $employee
        ]);
    }

    public function updateUser(Request $request,$id)
    {
        $updateEmp = DB::table('suppliers')->where('id',$id)->update(

            $updateEmp->username=$request->username,
    
            $updateEmp->email=$request->email,
    
            $updateEmp->phone=$request->phone,
    
            $updateEmp->gender=$request->gender,
    
            $updateEmp->save(),
           
        );
       
        return redirect()->back()->with('message','Employee updated successfully');
    }


    public function delete_employee($id)
    {
        $employeeToDelete = DB::table('suppliers')->where('id',$id);
        $employeeToDelete->delete();
        return redirect('/')->with('message','Employee deleted successfully');
    }
}
