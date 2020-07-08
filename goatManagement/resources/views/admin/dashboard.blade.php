        @extends("admin.sidePanel")
        
        @section("mainContain")
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <!-- Count all goat which are actiove -->
                                 @php
                                    $goat = DB::table("goat_infos")
                                        ->where("action", 1)
                                        ->count("goatId");
                                  @endphp

                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $goat }}</div>
                                    <div>Total Goads !</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ URL::to('/all-goat') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <!-- Total pregnant goat from breading table -->
                                @php
                                    $pegnant = DB::table("breadings")
                                        ->count("doeId");
                                  @endphp
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $pegnant }}</div>
                                    <div>Total Pregnant Goat !</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ URL::to('/pregnant-goat') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                @php
                                    $vaccines = DB::table("vaccines")
                                        ->where("action", 1)
                                        ->count("goatId");
                                  @endphp
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $vaccines }}</div>
                                    <div>Vaccines Given !</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ URL::to('/vaccines-info') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                @php
                                    $deathGoat = DB::table("goat_infos")
                                        ->where("action", 0)
                                        ->count("goatId");
                                  @endphp
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $deathGoat }}</div>
                                    <div>Total Death Goat !</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        @endsection