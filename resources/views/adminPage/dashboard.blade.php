 <?php echo View::make('includes/adminHeader'); ?>

<div class="content-wrapper">
  <section class="content">
         <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>UNIVERSITAS/INSTITUSI</th>
                    <th>NO.PASSPORT</th>
                    <th>NAMA MAHASISWA</th>
                    <th>TANGGAL PENDAFTARAN</th>
                  </tr>
                    @foreach ($personalDetails as $p_detail)
                      <tr>
                        <td>{{ $p_detail->id }}</td>

                        <td>
                         {{$p_detail->homeInstitution->name}}
                        </td>
                        <td>{{ $p_detail->passport_number }}</td>
                        <td>{{ $p_detail->fullname }}</td>
                        <td>{{ $p_detail->created_at }}</td>
                        <td>

                          <form method="get" action="#">
                            <input type="hidden" name="post" value="#">

                          <form method="get" action="{{ route('admin.tabelDetail', ['personalDetails' => $p_detail->id]) }}">

                            <button type="submit" class="btn btn-success btn-sm">Detail</button>
                          </form>
                        </td>
                        <td>
                          <form method="post" action="#">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
    </section>
</div>
<?php echo View::make('includes/adminFooter'); ?>

