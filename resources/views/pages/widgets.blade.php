@extends('layouts.app',[
    'class' => '',
    'folderActive' => '',
    'elementActive' => 'widgets'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-6 col-md-12 text-center">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Tasks</h4>
                        <h5 class="card-category">Backend development</h5>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/ayo-ogunseinde-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/erik-lucatero-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/kaci-baum-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">Using dummy content or fake information in the Web design
                                            process can result in products with unrealistic
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/joe-gardner-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">But I must explain to you how all this mistaken idea of
                                            denouncing pleasure</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh spin"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-text">
                            <h4 class="card-title">Employees Stats</h4>
                            <p class="card-category">New employees on 15th September, 2016</p>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>Curaçao</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-timeline card-plain">
                    <div class="card-body">
                        <ul class="timeline timeline-simple">
                            <li class="timeline-inverted">
                                <div class="timeline-badge danger">
                                    <i class="nc-icon nc-single-copy-04"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span class="badge badge-pill badge-danger">Some Title</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed.
                                            Thank you for making my family We just had fun with the “future” theme !!! It
                                            was a fun night all together ... The always rude Kanye Show at 2am Sold Out
                                            Famous viewing @ Figueroa and 12th in downtown.</p>
                                    </div>
                                    <h6>
                                        <i class="ti-time"></i> 11 hours ago via Twitter
                                    </h6>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge success">
                                    <i class="nc-icon nc-sun-fog-29"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span class="badge badge-pill badge-success">Another One</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Thank God for the support of my wife and real friends. I also wanted to point out
                                            that it’s the first album to go number 1 off of streaming!!! I love you Ellen
                                            and also my number one design rule of anything I do from shoes to music to homes
                                            is that Kim has to like it....</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge info">
                                    <i class="nc-icon nc-world-2"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <span class="badge badge-pill badge-info">Another Title</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye
                                            loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                                        <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but
                                            the Polar bear couch is my favorite piece of furniture we own It wasn’t any
                                            Kanyes Set on his goals Kanye</p>
                                        <hr>
                                    </div>
                                    <div class="timeline-footer">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-round btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                                <i class="nc-icon nc-settings-gear-65"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-pricing ">
                            <div class="card-header">
                                <h6 class="card-category"> Alpha Pack</h6>
                            </div>
                            <div class="card-body">
                                <div class="card-icon icon-primary ">
                                    <i class="nc-icon nc-spaceship"></i>
                                </div>
                                <h3 class="card-title">69$</h3>
                                <ul>
                                    <li>Working materials in EPS</li>
                                    <li>6 months access to the library</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-round btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-pricing card-plain">
                            <div class="card-header">
                                <h6 class="card-category"> Bravo Pack</h6>
                            </div>
                            <div class="card-body">
                                <div class="card-icon icon-warning ">
                                    <i class="nc-icon nc-shop"></i>
                                </div>
                                <h3 class="card-title">10$</h3>
                                <ul>
                                    <li>Complete documentation</li>
                                    <li>Working materials in Sketch</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-round btn-neutral btn-warning">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-testimonial">
                    <div class="card-body ">
                        <div class="icon icon-primary">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <p class="card-description">
                            The networking at Web Summit is like no other European tech conference.
                        </p>
                    </div>
                    <div class="card-footer ">
                        <h4 class="card-title">Gina Andrew</h4>
                        <h6 class="card-category">@ginaandrew</h6>
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="{{ asset('img/faces/joe-gardner-2.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection