<?php echo View::make('includes/adminHeader'); ?>

<div class="content-wrapper">
  <section class="content">
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-green-active">
                      <h3 class="widget-user-username">{{$outPersonalDetails->fullname}}</h3>
                      <h5 class="widget-user-desc">Laki-laki</h5>
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="{{asset('img/admin.png')}}" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{ $outPersonalDetails->nim }}</h5>
                            <span class="description-text">Nomor Passport</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{$outPersonalDetails->outAcademic->department}}</h5>
                            <span class="description-text">Program Studi</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header">{{$outPersonalDetails->outAcademic->semester}}</h5>
                            <span class="description-text">Angkatan</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  
                    <!-- Personal Detail -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Personal Details</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                              <td class="mailbox-name text-blue">Name in Full (as appears on passport) Mr./Mrs./Ms.</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->fullname }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Nationality</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->nationality }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Date of Birth</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->date_of_birth }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Place of Birth</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->place_of_birth }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Religion</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->religion }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                           
                            <tr>
                              <td class="mailbox-name text-blue">Passport Number</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->passport_number }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Passport Expired</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->pssport_expired }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  

                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Contact Information</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outContact->email }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Mobile Number</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outContact->mobile }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Telphone</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outContact->telp }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Mailing Address</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outContact->address }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Application Details -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Application Details</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                              <td class="mailbox-name text-blue">Type of Program</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outApplicantDetails->type_program }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Program Period</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outApplicantDetails->program_period }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Host University</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outApplicantDetails->host_univ }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Academic Information -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Academic Information</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                              <td class="mailbox-name text-blue">Department</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outAcademic->department }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Semester</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outAcademic->semester }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">IPS/IPK</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outAcademic->gpa }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">TOEFL/IELTS Score</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outAcademic->english_score }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">TOEFL/IELTS Test Date</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outAcademic->date_test_english }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Membership and Organization Activities -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Membership and Organization Activities</h3>
  
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                         <div class="table-responsive mailbox-messages box-body">
                            <table class="table table-hover table-striped">
                              <thead>
                                  <tr>
                                      <th class="mailbox-name text-blue">Name of Organization</th>
                                      <th class="mailbox-name text-blue">Year</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($outPersonalDetails->outOrganization as $org)
                                  <tr>
                                      <td><b>{{ $org->name_org }}</b></td>
                                      <td><b>{{ $org->year_org }}</b></td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                         </div>
                      </div>


                    <!-- Achievement/Reward -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Achievement/Award</h3>
  
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                         <div class="table-responsive mailbox-messages box-body">
                            <table class="table table-hover table-striped">
                              <thead>
                                  <tr>
                                      <th class="mailbox-name text-blue">Name of Award</th>
                                      <th class="mailbox-name text-blue">Institution</th>
                                      <th class="mailbox-name text-blue">Year</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($outPersonalDetails->outStudentAward as $sa)
                                  <tr>
                                      <td><b>{{ $sa->name_award }}</b></td>
                                      <td><b>{{ $sa->name_institution }}</b></td>
                                      <td><b>{{ $sa->year_award }}</b></td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                         </div>
                      </div>

                    <!-- Parent/Guardian Contact -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Parent/Guardian Contact</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                              <td class="mailbox-name text-blue">Fullname</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outGuardianParent->fullname }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Program Period</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outGuardianParent->relationship }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Host University</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outGuardianParent->address }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outGuardianParent->phone }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Mobile</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outGuardianParent->mobile }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">email</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outGuardianParent->email }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            </tbody>
                          </table>
                       </div>
                    </div>

                   <!-- MotivationLetter -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Purpose and Motivation Statement</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                              <td class="mailbox-name text-blue">Purpose and Motivation Statement</td>
                              <td class="mailbox-subject"><b>{{ $outPersonalDetails->outMotivationStatement->text }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            </tbody>
                          </table>
                       </div>
                    </div>








                </div>
              
            </div>
        </div>
      </div>
    </section>
</div>
<?php echo View::make('includes/adminFooter'); ?>

