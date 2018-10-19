<img src="{{ $message->image }}" alt="" class="img-thumbnail">
<div class="card-text">
	<div class="text-muted">
		<p>Escrito por: <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a></p>
	</div>
	<p>{{ $message->content }} <a href="/message/{{ $message->id }}"> Ver más </a></p>
	<p class="card-text text-muted float-right ">{{ $message->created_at }}</p>
</div>