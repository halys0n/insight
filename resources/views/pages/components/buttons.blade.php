@extends('layouts.app', [
    'class' => '',
    'folderActive' => 'components',
    'elementActive' => 'buttons'
])

@section('content') 
    <div class="content">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="card-title">Pick your Color</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn">Default</button>
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-info">Info</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-warning">Warning</button>
                        <button class="btn btn-danger">Danger</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="card-title">Buttons with Label</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-info">
                            <span class="btn-label">
                                <i class="nc-icon nc-settings-gear-65"></i>
                            </span>
                            Info
                        </button>
                        <button class="btn btn-success">
                            <span class="btn-label">
                                <i class="nc-icon nc-check-2"></i>
                            </span>
                            Success
                        </button>
                        <button class="btn btn-warning">
                            <i class="nc-icon nc-zoom-split"></i> Warning
                        </button>
                        <button class="btn btn-danger">
                            <i class="nc-icon nc-simple-remove"></i> Danger
                        </button>
                        <button class="btn">
                            <span class="btn-label">
                                <i class="nc-icon nc-minimal-left"></i>
                            </span>
                            Left
                        </button>
                        <button class="btn">
                            Right
                            <span class="btn-label btn-label-right">
                                <i class="nc-icon nc-minimal-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="card-title">Pick your Size</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary btn-sm">Small</button>
                        <button class="btn btn-primary">Regular</button>
                        <button class="btn btn-primary btn-lg">Large</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="card-title">Pick your Style</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Default</button>
                        <button class="btn btn-primary btn-round">round</button>
                        <button class="btn btn-primary btn-round btn-icon">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-round">
                            <i class="fa fa-heart"></i> with icon
                        </button>
                        <button class="btn btn-primary btn-link">
                            link
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="card-title">Pagination</h4>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">5</a>
                                </li>
                            </ul>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#link" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-angle-double-left"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#link">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#link" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-angle-double-right"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="card-title">Button Group</h4>
                    </div>
                    <div class="card-body">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-info btn-round">Left</button>
                            <button type="button" class="btn btn-outline-info btn-round">Middle</button>
                            <button type="button" class="btn btn-outline-info btn-round">Right</button>
                        </div>
                        <br>
                        <br>
                        <div class="btn-group" data-toggle="buttons">
                            <button type="button" class="btn btn-round btn-outline-info">1</button>
                            <button type="button" class="btn btn-round btn-outline-info">2</button>
                            <button type="button" class="btn btn-round btn-outline-info">3</button>
                            <button type="button" class="btn btn-round btn-outline-info">4</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-round btn-outline-info">5</button>
                            <button type="button" class="btn btn-round btn-outline-info">6</button>
                            <button type="button" class="btn btn-round btn-outline-info">7</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-header">
                        <h4 class="card-title">Social buttons</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <p class="category">Default</p>
                                <button class="btn btn-twitter">
                                    <i class="fa fa-twitter"></i> Connect with Twitter
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <p class="category">&nbsp;</p>
                                <button class="btn btn-icon btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <p class="category">&nbsp;</p>
                                <button class="btn btn-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <p class="category">Neutral</p>
                                <button class="btn btn-icon btn-neutral btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <p class="category">&nbsp;</p>
                                <button class="btn btn-neutral btn-twitter">
                                    <i class="fa fa-twitter"></i> Connect with Twitter
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-facebook">
                                    <i class="fa fa-facebook-square"></i> Share · 2.2k
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-facebook">
                                    <i class="fa fa-facebook-f"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-facebook">
                                    <i class="fa fa-facebook-f"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-facebook">
                                    <i class="fa fa-facebook-square"> </i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-facebook">
                                    <i class="fa fa-facebook-square"></i> Share · 2.2k
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-google">
                                    <i class="fa fa-google-plus"></i> Share on Google+
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-google">
                                    <i class="fa fa-google-plus"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-google">
                                    <i class="fa fa-google-plus"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-google">
                                    <i class="fa fa-google-plus"> </i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-google">
                                    <i class="fa fa-google-plus"></i> Share on Google+
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-linkedin">
                                    <i class="fa fa-linkedin"></i> Connect with Linkedin
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-linkedin">
                                    <i class="fa fa-linkedin"></i> Connect with Linkedin
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-pinterest">
                                    <i class="fa fa-pinterest"></i> Pint it · 212
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-pinterest">
                                    <i class="fa fa-pinterest"></i> Pint it · 212
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-youtube">
                                    <i class="fa fa-youtube"></i> View on Youtube
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-youtube">
                                    <i class="fa fa-youtube"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-youtube">
                                    <i class="fa fa-youtube"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-youtube">
                                    <i class="fa fa-youtube"> </i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-youtube">
                                    <i class="fa fa-youtube"></i> View on Youtube
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-tumblr">
                                    <i class="fa fa-tumblr-square"></i> Repost
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-tumblr">
                                    <i class="fa fa-tumblr"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-tumblr">
                                    <i class="fa fa-tumblr"> </i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-tumblr">
                                    <i class="fa fa-tumblr-square"> </i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-tumblr">
                                    <i class="fa fa-tumblr-square"></i> Repost
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-github">
                                    <i class="fa fa-github"></i> Connect with Github
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-github">
                                    <i class="fa fa-github"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-github">
                                    <i class="fa fa-github"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-github">
                                    <i class="fa fa-github"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-github">
                                    <i class="fa fa-github"></i> Connect with Github
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-behance">
                                    <i class="fa fa-behance-square"></i> Follow us
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-behance">
                                    <i class="fa fa-behance"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-behance">
                                    <i class="fa fa-behance"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-behance">
                                    <i class="fa fa-behance"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-behance">
                                    <i class="fa fa-behance-square"></i> Follow us
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-dribbble">
                                    <i class="fa fa-dribbble"></i> Find us on Dribble
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-dribbble">
                                    <i class="fa fa-dribbble"></i> Find us on Dribble
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <button class="btn btn-reddit">
                                    <i class="fa fa-reddit"></i> Repost · 232
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon  btn-reddit">
                                    <i class="fa fa-reddit"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-round btn-reddit">
                                    <i class="fa fa-reddit"></i>
                                </button>
                            </div>
                            <div class="col-md-1 col-sm-1 col-3">
                                <button class="btn btn-icon btn-neutral btn-reddit">
                                    <i class="fa fa-reddit"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <button class="btn btn-neutral btn-reddit">
                                    <i class="fa fa-reddit"></i> Repost · 232
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection