<div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">{{ $category }}</strong>
            <h3 class="mb-0">
                <a class="text-dark" href="/posts/{{ $id }}">{{ $title }}</a>
            </h3>
            <div class="mb-1 text-muted">{{ $posted_at }}</div>
            <p class="card-text mb-auto">{{ $leading }}</p>
            <a href="/posts/{{ $id }}">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ $image }}"
            data-holder-rendered="true">
    </div>
</div>
