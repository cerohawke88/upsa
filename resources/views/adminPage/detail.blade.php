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
                      <h3 class="widget-user-username">{{$personalDetails->fullname}}</h3>
                      <h5 class="widget-user-desc">Laki-laki</h5>
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="{{asset('img/admin.png')}}" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{ $personalDetails->passport_number }}</h5>
                            <span class="description-text">Nomor Passport</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{$personalDetails->homeInstitution->faculty_dep}}</h5>
                            <span class="description-text">Program Studi</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header">{{$personalDetails->homeInstitution->start_year}}</h5>
                            <span class="description-text">Angkatan</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  
                    <!-- Files -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Files</h3>

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
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->title }}</td>
                                    <td>{{ $file->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ Storage::url($file->filename) }}" title="View file {{ $file->title }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('file.download', $file->id) }}" title="Download file {{ $file->title }}">
                                            <i class="fa fa-download fa-fw"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                       </div>
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
                              <td class="mailbox-subject"><b>{{ $personalDetails->fullname }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Nationality</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->nationality }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Place, Date of Birth</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->date_of_birth }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Passport Number</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->passport_number }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Issuing Country</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->issuing_country }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Date of Issue</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->date_of_issue }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Date of Expiry</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->date_of_expiry }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Blood Type</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->blood_type }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Maritial Status</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->marital_status }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Permanent/Home Address</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->address }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">City</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->city }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Postal/ZIP Code</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->postal_code }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Province/State</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->province }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Country</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->country }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->phone }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Mobile</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->mobile }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->email }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Mailing Address(if diffrent)</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->address2 }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">City</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->city2 }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Province/State</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->province2 }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Postal/ZIP COde</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->postal_code2 }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Country</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->country2 }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->phone2 }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Contact Name</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->contact_name }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>

                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Home Institution -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Home Institution</h3>

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
                              <td class="mailbox-name text-blue">Name of Institution</td>
                            <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->name }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Address</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->address }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->phone }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->email }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Website</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->website }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Faculty/Department</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->faculty_dep }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Starting Year in University</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->start_year }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Cumulative GPA</td>
                              <td class="mailbox-subject"><b>{{ $personalDetails->homeInstitution->gpa }}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP) -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Proposed Study at Universitas Pertamina (UP)</h3>

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
                              <td class="mailbox-name text-blue">Semester</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->semester}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Academic Year</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->academic_year}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Faculty</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->faculty}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Department</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->department}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Spesific Study Period</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->study_period}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Start Date (dd/mm/yyyy)</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->start_date}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">End Date (dd/mm/yyyy)</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->proposedStudy->end_date}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Course -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Course</h3>
  
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
                                      <th class="mailbox-name text-blue">Course Title</th>
                                      <th class="mailbox-name text-blue">Credit</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($personalDetails->course as $course)
                                  <tr>
                                      <td><b>{{ $course->course_title }}</b></td>
                                      <td><b>{{ $course->credit }}</b></td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                         </div>
                      </div>


                    <!-- English Test Result -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                          <h3 class="box-title">English Test Result</h3>
  
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
                                      <th class="mailbox-name text-blue">Test</th>
                                      <th class="mailbox-name text-blue">Score</th>
                                      <th class="mailbox-name text-blue">Test Center</th>
                                      <th class="mailbox-name text-blue">Date Tested</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($personalDetails->englishTestResult as $et)
                                  <tr>
                                      <td><b>{{ $et->test }}</b></td>
                                      <td><b>{{ $et->score }}</b></td>
                                      <td><b>{{ $et->test_center }}</b></td>
                                      <td><b>{{ $et->date_tested }}</b></td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                         </div>
                      </div>


                    <!-- INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA  -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Insurance during Study at Universitas Pertamina (UP)</h3>

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
                              <td class="mailbox-name text-blue">Health Insurance Name</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->insurance->insurance_name}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Validity</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->insurance->validity}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Cover</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->insurance->cover}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                                                              
                            </tbody>
                          </table>
                       </div>
                    </div>


                    <!-- Accomodation Arrangement  -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Accomodation Arrangement</h3>

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
                              <td class="mailbox-name text-blue">Accomodation Help</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->accomodation->accomodation_help}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Address</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->accomodation->address}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Contact Person</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->accomodation->contact_person}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                                                              
                            </tbody>
                          </table>
                       </div>
                    </div>


                    <!--CONTACT OF EMERGENCY  -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Contact Of Eemergency</h3>

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
                              <td class="mailbox-subject"><b>{{$personalDetails->emergencyContact->fullname}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Relationship</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->emergencyContact->relationship}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Address</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->emergencyContact->address}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                 
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->emergencyContact->phone}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                 
                            <tr>
                              <td class="mailbox-name text-blue">Mobile</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->emergencyContact->mobile}}</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                                                              
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b>{{$personalDetails->emergencyContact->email}}</b></td>
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

