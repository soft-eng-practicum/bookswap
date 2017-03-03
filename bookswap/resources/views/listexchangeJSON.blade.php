

[
            <!-- Current Tasks -->
            @if (count($exchange) > 0)




                                @foreach ($exchange as $exchange)

{
   "Title": "{{ $exchange->title}}",
    "Description": "{{ $exchange->description }}",
    "Price": "${{ $exchange->price}}",
     "Email": "{{ $exchange->email}}"

}

,



                                @endforeach

            @endif
]
