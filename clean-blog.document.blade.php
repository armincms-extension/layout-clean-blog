 <header class="masthead" 
	@if($this->config('show_image', true)) style="background-image:url('{{ $this->component->featuredImage() }}')" @endif>
    <div class="overlay"></div> 
    <div class="row">
      	<div class="col-lg-10 col-md-12">
	        <div class="post-heading">
	        	@if($this->config('show_title', true))
	          	<h1>{!! $this->data('title') !!}</h1>
	          	@endif
	        	@if($this->config('show_abstract', true))
	          	<small class="subheading">{!! $this->data('abstract') !!}</small>
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
@if($this->config('show_description', true))
<article>  
	{!! $this->data('description') !!}
</article>
@endif 
