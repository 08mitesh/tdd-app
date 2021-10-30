<h1>{{ $concert->title }}</h1>
<p>{{ $concert->subtitle }}</p>
<p>{{ $concert->formatted_date }}</p>
<p>{{ $concert->formatted_start_time}}</p>
<p>{{ number_format($concert->ticket_price / 100 ,2) }}</p>
<p>{{ $concert->venue }}</p>
<p>{{ $concert->venue_address }}</p>
<p>{{ $concert->state }}</p>
<p>{{ $concert->city }}</p>
<p>{{ $concert->zip }}</p>
<p>{{ $concert->additional_info }}</p>





