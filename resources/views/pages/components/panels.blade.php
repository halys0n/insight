@extends('layouts.app', [
    'class' => '',
    'folderActive' => 'components',
    'elementActive' => 'panels'
]) 

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                            <h4 class="card-title">Collapsible Accordion</h4>
                            <div class="card card-plain">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                        <i class="nc-icon nc-minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                        <i class="nc-icon nc-minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                        <i class="nc-icon nc-minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-plain">
                    <div class="card-body">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                            <h4 class="card-title">Collapsible Accordion on Plain Card</h4>
                            <div class="card card-plain">
                                <div class="card-header" role="tab" id="heading1">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                        <i class="nc-icon nc-minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain">
                                <div class="card-header" role="tab" id="heading2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                                        aria-expanded="false" aria-controls="collapse2">
                                        Collapsible Group Item #2
                                        <i class="nc-icon nc-minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain">
                                <div class="card-header" role="tab" id="heading3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                                        aria-expanded="false" aria-controls="collapse3">
                                        Collapsible Group Item #3
                                        <i class="nc-icon nc-minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Tabs</h5>
                    </div>
                    <div class="card-body">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul id="tabs" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab"
                                            aria-expanded="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab"
                                            aria-expanded="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab"
                                            aria-expanded="false">Messages</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="my-tab-content" class="tab-content text-center">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a
                                    smooth metal surface that seamlessly meets the new Retina HD display.</p>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                                <p>Here is your profile.</p>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-expanded="false">
                                <p>Here are your messages.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Tabs</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-4 col-6">
                                <div class="nav-tabs-navigation verical-navs">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#info" role="tab"
                                                    data-toggle="tab">Info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#description" role="tab"
                                                    data-toggle="tab">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#concept" role="tab" data-toggle="tab">Concept</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#support" role="tab" data-toggle="tab">Support</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#extra" role="tab" data-toggle="tab">Extra</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-8 col-6">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="info">
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.
                                            With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                                        <p>It’s one continuous form where hardware and software function in perfect unison,
                                            creating a new generation of phone that’s better by any measure.</p>
                                    </div>
                                    <div class="tab-pane" id="description">
                                        <p>The first thing you notice when you hold the phone is how great it feels in your
                                            hand. The cover glass curves down around the sides to meet the anodized aluminum
                                            enclosure in a remarkable, simplified design. </p>
                                        <p>There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and
                                            glass that feels like one continuous surface.</p>
                                    </div>
                                    <div class="tab-pane" id="concept">
                                        <p>It’s one continuous form where hardware and software function in perfect unison,
                                            creating a new generation of phone that’s better by any measure.</p>
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.
                                            With a smooth metal surface that seamlessly meets the new Retina HD display.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="support">
                                        <p>From the seamless transition of glass and metal to the streamlined profile, every
                                            detail was carefully considered to enhance your experience. So while its display
                                            is larger, the phone feels just right.</p>
                                        <p>It’s one continuous form where hardware and software function in perfect unison,
                                            creating a new generation of phone that’s better by any measure.</p>
                                    </div>
                                    <div class="tab-pane" id="extra">
                                        <p>It’s one continuous form where hardware and software function in perfect unison,
                                            creating a new generation of phone that’s better by any measure.</p>
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.
                                            With a smooth metal surface that seamlessly meets the new Retina HD display.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card card-plain card-subcategories">
                    <div class="card-header ">
                        <h4 class="card-title text-center">Page Subcategories</h4>
                        <br />
                    </div>
                    <div class="card-body ">
                        <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                        <ul class="nav nav-pills nav-pills-primary nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                                    <i class="now-ui-icons objects_umbrella-13"></i> Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                                    <i class="now-ui-icons shopping_shop"></i> Messages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Settings
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories">
                            <div class="tab-pane active" id="link7">
                                Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C users after installed base benefits.
                                <br>
                                <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                            </div>
                            <div class="tab-pane" id="link8">
                                Efficiently unleash cross-media information without cross-media value. Quickly maximize
                                timely deliverables for real-time schemas.
                                <br>
                                <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                            </div>
                            <div class="tab-pane" id="link9">
                                Completely synergize resource taxing relationships via premier niche markets. Professionally
                                cultivate one-to-one customer service with robust ideas.
                                <br>
                                <br>Dynamically innovate resource-leveling customer service for state of the art customer
                                service.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection