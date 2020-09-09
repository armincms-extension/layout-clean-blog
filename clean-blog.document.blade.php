@var($image = $this->component->data(
	'image', $this->config('image.schema', 'main')
))  
@if(! Storage::disk('armin.public')->has($image) && $image != 'original')
	@var($image = $this->data('image.original'))
@endif 
<header class="masthead" 
	@if($this->config('show_image', true)) style="background-image:url('{{ $image }}')" @endif>
    <div class="overlay"></div> 
    <div class="row">
      	<div class="col-lg-10 col-md-12">
	        <div class="post-heading">
	        	@if($this->config('show_title', true))
	          	<h1>{!! $this->data('title') !!}</h1>
	          	@endif
	        	@if($this->config('show_intro_text', true))
	          	<small class="subheading">{!! $this->data('intro_text') !!}</small>
	          	@endif
	          	<span class="meta">  
	        		@if($this->config('show_author', true))
	          		@trans('armin::title.owner'): {{ $this->data('owner.firstname') }} {{ $this->data('owner.lastname') }}
					@var($creationDate = $this->data('created_at'))
		          	<br>
		          	@endif 
	        		@if($this->config('show_date', true))
	            	<small>`@format($creationDate, 'Y-d-F')`</small>
	            	@endif 
	        	</span>
	        </div>
      	</div>
    </div> 
</header> 
@if($this->config('show_full_text', true))
<article>  
	{!! $this->data('full_text') !!}
</article>
@endif 
