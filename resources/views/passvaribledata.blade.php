<h1> Pass variable data controller to view </h1>
{{-- pass var controller to view and show it --}}
<h1> {{$user}} </h1>
<h1>Show array data </h1>
<h1> {{$showarray[2]}} </h1>

<h1> Show all array data using foreach</h1>
<div>
    @foreach ($showarray as $item)
    <h5> {{$item}} </h5>
        
    @endforeach
</div>

<h1>For loop</h1>
<div>
    @for ($i = 0; $i<=5; $i++)
     <h3> {{$i}}</h3>
     
        
    @endfor
</div>