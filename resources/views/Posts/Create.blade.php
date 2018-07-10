@extends ('main')

@section ('title', '| Create New Post')

@section ('stylesheets')

{!!Html::style('css/select2.min.css')!!}
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=xpzgj5xm3q4349f58qxl4sxzdl3o7nkiy84rj8rqupy1glf7"></script>
<script>
	tinymce.init({
		selector: 'textarea',
		plugins:'link code',
		menubar:false,
		
	});
</script>


@endsection 

@section ('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'files'=>'true']) !!}

				{{Form::label('title','Title:')}}
				{{Form::text('title', null, array('class' =>'form-control') )}}

				{{Form::label('slug', 'Slug:')}}
				{{Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255'))}}
				{{Form::label('category_id', 'Category:')}}
				<select class="form-control" name="category_id">
					@foreach( $categories as $category )
					 	<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>

				{{Form::label('tags', 'Tags:')}}
				<select class="form-control select2-multi" name="tags[]" multiple="multiple" >
					@foreach( $tags as $tag )
					 	<option value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
				</select>

				{{Form::label('featured_image', 'Uploaded Featured Image')}}
				{{Form::file('featured_image')}}

				{{Form::label('body','Post Body:')}}
				{{Form::textarea('body', null, array('class' =>'form-control') )}}

				{{Form::submit('Create Post', array('class' =>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;' ))}}
				    
			{!! Form::close() !!}


			
		</div>			
	</div>



@endsection

@section('scripts')

{!!html::script('js/select2.min.js')!!}

<script type ="text/javascript">
	$('.select2-multi').select2();
	
</script>

@endsection