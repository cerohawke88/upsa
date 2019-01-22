<?php echo View::make('includes/adminHeader'); ?>

<div class="content-wrapper">
  <section class="content">
         <!-- /.row -->
        <div class="row">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                      <h3 class="widget-user-username">{{ $personalDetails->fullname }}</h3>
                      <h5 class="widget-user-desc">Laki-laki</h5>
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    </div>
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">10526059</h5>
                            <span class="description-text">Nomor Induk Mahasiswa(NIM)</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">Ilmu Komputer</h5>
                            <span class="description-text">Program Studi</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header">2016</h5>
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
                              <td class="mailbox-subject"><b>Mr. Cleoputra Goldi Abidigoldi</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Nationality</td>
                              <td class="mailbox-subject"><b>Indonesia</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Place, Date of Birth</td>
                              <td class="mailbox-subject"><b>Jakarta, 29/02/18</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Passport Number</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Issuing Country</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Date of Issue</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Date of Expiry</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Blood Type</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Maritial Status</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Permanent/Home Address</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">City</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Postal/ZIP Code</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Province/State</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Country</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Mobile</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Mailing Address(if diffrent)</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">City</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Province/State</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Postal/ZIP COde</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Country</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Contact Name</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>

                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- Home Intitution -->
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
                              <td class="mailbox-subject"><b>Universitas Pertamina</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Address</td>
                              <td class="mailbox-subject"><b>Simprug, Jl. Teuku Nyak Arief, RT.7/RW.8, Grogol Sel., <br>Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12220</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b>(021) 29044308</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Website</td>
                              <td class="mailbox-subject"><b>https://universitaspertamina.ac.id</b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Faculty/Department</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Starting Year in University</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Cumulative GPA</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            </tbody>
                          </table>
                       </div>
                    </div>

                    <!-- PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP) -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">PROPOSED STUDY AT UNIVERSITAS PERTAMINA (UP)</h3>

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
                              <td class="mailbox-name text-blue">Academic Year</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Faculty</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Department</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Spesific Study Period</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Start Date (dd/mm/yyyy)</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">End Date (dd/mm/yyyy)</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">Courses take at UP:</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            </tbody>
                          </table>
                       </div>
                    </div>


                    <!-- ENGLISH TEST RESULT -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">ENGLISH TEST RESULT</h3>

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
                              <td class="mailbox-name text-blue">TOEFL SCORE</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">TOEFL TEST CENTRE</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">TOEFL DATE TESTED</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">IELTS SCORE</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">IELTS TEST CENTRE</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">IELTS DATE TESTED</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            <tr>
                              <td class="mailbox-name text-blue">OTHERS </td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                             
                            </tbody>
                          </table>
                       </div>
                    </div>


                    <!-- INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA  -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">INSURANCE DURING STUDY AT UNIVERSITAS PERTAMINA</h3>

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
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Validity</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Cover</td>
                              <td class="mailbox-subject"><b></b></td>
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
                              <td class="mailbox-name text-blue">Health Insurance Name</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Validity</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Cover</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                                                              
                            </tbody>
                          </table>
                       </div>
                    </div>


                    <!--CONTACT OF EMERGENCY  -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">CONTACT OF EMERGENCYt</h3>

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
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>
                            <tr>
                              <td class="mailbox-name text-blue">Relationship</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                  
                            <tr>
                              <td class="mailbox-name text-blue">Address</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                 
                            <tr>
                              <td class="mailbox-name text-blue">Phone</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                 
                            <tr>
                              <td class="mailbox-name text-blue">Mobile</td>
                              <td class="mailbox-subject"><b></b></td>
                              <td class="mailbox-attachment"></td>
                            </tr>                                                              
                            <tr>
                              <td class="mailbox-name text-blue">Email</td>
                              <td class="mailbox-subject"><b></b></td>
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

