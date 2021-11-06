<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <about>
        {}
            <h1>hello world *-* !!</h1>
          {{-- @foreach($tasks as $task)
           <ul>
               <li>{{$task}}</-li>
           </ul>
           @endforeach--}}
           <ul>
               @foreach($tasks as $index=>$tasks)
            {{--    <li>{{$tasks->id}}</-li> --}}
               <li><a href="about/{{$tasks->id}}">{{$tasks->name}}</a></li>
               @endforeach
           </ul>


        </about>
</html>
