
@extends('./app/navbar')



@section('heading')
<h2 class="text-center my-2"> Student Identification Form</h2>
@stop

@section('form')


         <div class='container my-2 bg-light text-dark p-4'>

        {!!Form::open(['method'=>'PATCH','action'=> 'icardController@update'])!!}

        
        <div class='form-group'>
           
           {!!Form::label('name','Student Name')!!}
           {!!Form::text('name',$details->name,['class'=>'form-control'])!!}
           
           {!!Form::label('program','Program')!!}
           {!!Form::text('program', $details->program ,['class'=>'form-control'])!!}
           
           {!!Form::label('student_id','Student Id')!!}
           {!!Form::text('student_id', $details->student_id ,['class'=>'form-control'])!!}
           
           {!!Form::label('dob','Student Date Of Birth')!!}
           {!!Form::text('dob', $details->dob ,['class'=>'form-control'])!!}
           
           {!!Form::label('address',' Student Address')!!}
           {!!Form::text('address', $details->address ,['class'=>'form-control'])!!}
           
           
           {!!Form::submit('Update I-card',['class'=>'btn btn-primary my-2'])!!}
           
           
           
           {!!Form::close()!!} 
           
           </div>
          
   

@stop
