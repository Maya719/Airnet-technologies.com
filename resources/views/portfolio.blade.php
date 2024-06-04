<ul class="nav nav-tabs  d-flex justify-content-around align-items-center"
    style="background-color: #ffffff; padding:0.7rem; border-radius:15px; color:rgb(12, 12, 12); " id="myTab"
    role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
            role="tab" aria-controls="home-tab-pane" aria-selected="true">Peri</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
            role="tab" aria-controls="profile-tab-pane" aria-selected="false">Web Development</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ai_proj-tab" data-bs-toggle="tab" data-bs-target="#ai_proj-tab-pane" type="button"
            role="tab" aria-controls="ai_proj-tab-pane" aria-selected="false">Artificial Intelligence</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
            role="tab" aria-controls="contact-tab-pane" aria-selected="false">Application Development</button>
    </li>

</ul>
<div class="tab-content my-5" id="myTabContent">
    {{-- all projects --}}
    <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


        <div class="d-flex flex-wrap justify-content-center">
            @foreach ($all_projects as $projects)
                @if ($projects['category'] == 'plan')
                    <div class="col-sm-10 col-md-4 mb-4">
                        <div class="card mx-3 project_description">
                            <img src="{{ asset('storage/' . $projects['thumbnail']) }}" loading="lazy"
                                alt="{{ asset('storage/' . $projects['thumbnail']) }}" class="img-fluid project_img">
                            <div class="card-body project_desc">
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <h5 class="card-title fs-6">{{ $projects['title'] }} &nbsp;</h5>
                                </a>
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <p class="card-text truncate-multiline fs-6" id="description-{{ $projects['id'] }}">
                                        AED {{ $projects['price'] }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- web projects --}}
    <div class="tab-pane fade show active " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
        tabindex="0">

        <div class="d-flex flex-wrap justify-content-center">
            <!-- Loop through projects -->
            @foreach ($all_projects as $projects)
                @if ($projects['category'] == 'Web')
                    <div class="col-sm-10 col-md-4 mb-4">
                        <div class="card mx-3 project_description">
                            <img src="{{ asset('storage/' . $projects['thumbnail']) }}" loading="lazy"
                                alt="{{ asset('storage/' . $projects['thumbnail']) }}" class="img-fluid project_img">
                            <div class="card-body project_desc">
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <h5 class="card-title fs-6">{{ $projects['title'] }} &nbsp;</h5>
                                </a>
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <p class="card-text truncate-multiline fs-6"
                                        id="description-{{ $projects['id'] }}">
                                        AED {{ $projects['price'] }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- ai projects --}}
    <div class="tab-pane fade" id="ai_proj-tab-pane" role="tabpanel" aria-labelledby="ai_proj-tab" tabindex="0">

        <div class="d-flex flex-wrap justify-content-center">
            <!-- Loop through projects -->
            @foreach ($all_projects as $projects)
                @if ($projects['category'] == 'Ai')
                    <div class="col-sm-10 col-md-4 mb-4">
                        <div class="card mx-3 project_description">
                            <img src="{{ asset('storage/' . $projects['thumbnail']) }}" loading="lazy"
                                alt="{{ asset('storage/' . $projects['thumbnail']) }}" class="img-fluid project_img">
                            <div class="card-body project_desc">
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <h5 class="card-title fs-6">{{ $projects['title'] }} &nbsp;</h5>
                                </a>
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <p class="card-text truncate-multiline fs-6"
                                        id="description-{{ $projects['id'] }}">
                                        AED {{ $projects['price'] }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


    </div>


    {{-- app projects  --}}
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">


        <div class="d-flex flex-wrap justify-content-center">
            <!-- Loop through projects -->
            @foreach ($all_projects as $projects)
                @if ($projects['category'] == 'App')
                    <div class="col-sm-10 col-md-4 mb-4">
                        <div class="card mx-3 project_description">
                            <img src="{{ asset('storage/' . $projects['thumbnail']) }}" loading="lazy"
                                alt="{{ asset('storage/' . $projects['thumbnail']) }}" class="img-fluid project_img">
                            <div class="card-body project_desc">
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <h5 class="card-title fs-6">{{ $projects['title'] }} &nbsp;</h5>
                                </a>
                                <a href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                    <p class="card-text truncate-multiline fs-6"
                                        id="description-{{ $projects['id'] }}">
                                        AED {{ $projects['price'] }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


    </div>
</div>

<script>
    function toggleText(element) {
        const targetId = element.getAttribute('data-target');
        const targetElement = document.getElementById(targetId);

        if (element.textContent.trim() === 'See more') {
            targetElement.classList.remove('truncate-multiline');
            element.textContent = 'See less';
        } else {
            targetElement.classList.add('truncate-multiline');
            element.textContent = 'See more';
        }
    }
</script>


<style>
    .project_description {
        height: 28rem;
        max-height: 34rem;
    }

    .project_img {
        height: 22rem;
    }

    .truncate-multiline {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Number of lines to show */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .visit-link {
        text-decoration: none;
        text-align: center;
        margin-top: 0.9rem;
    }

    .visit_btn {
        color: black;
        text-align: center;
        display: inline-block;
        padding: 5px 10px;
        background: linear-gradient(to right, lightblue, white);
        border-radius: 5px;
        font-weight: bold;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .visit_btn:hover {
        background: linear-gradient(to right, #012971, #4682B4);
        color: white;
    }
</style>
