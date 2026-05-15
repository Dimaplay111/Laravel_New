
<table border="1">
	@foreach ($posts as $post)
			<thead>
				<td>{{ $post->title }}</td>
			</thead>
			<tbody>
			<td>
				{{ $post->slug }}
				<td>{{ $post->likes }}</td>
			</td>
			<p>{{ $post->created_at }}</p>
			<p>{{ $post->updated_at }}</p>
			</tbody>
	@endforeach
</table>
