<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
{{-- @include('header') --}}

{{-- hhhhhhhhhhhhhhhhhhhhhhhh --}}

{{-- 
{!! $test !!} --}}
        
@php
    $records = 40;
@endphp



    {{-- @if ($records === 1)
        I have one record!
    @elseif ($records > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif   --}}

{{-- @if ($records == 25)
aaaaaaaaaaaaaaaa
@else
{{$records}}  
@endif --}}
 


 {{--    
   {{-- Switch Case--}}
   {{-- 
    
@switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch
    
    
    
    
    --}}
   
{{-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br/>
@endfor    --}}

{{-- @while ($records == 40)
    <p>I'm looping forever.</p>
@endwhile --}}

<div class="container mt-5">
    <form method="post" action="{{ url('/getfromController')}}">
        @csrf   
         <input type="text" name="name" >
        <input type="text" name="age" >
        <input type="submit" value="Submit" >
        
        
          </form>
</div> 
  




    </body>
</html>
