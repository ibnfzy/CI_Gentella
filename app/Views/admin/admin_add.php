<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Form Elements</h3> -->
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <button onclick="history.back()" style="float: right;" class="btn btn-info col-2"><i class="fa fa-arrow-circle-o-left"></i>Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!-- <h2>Form Design <small>different form elements</small></h2> -->
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <?= form_open('U/Admin', [
              'class' => 'form-horizontal form-label-left',
              'data-parsley-validate' => ''
            ]); ?>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fullname <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('fullname', '', [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => 'Masukkan nama lengkap',
                  'required' => 'required'
                ]); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('username', '', [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => 'Masukkan Username',
                  'required' => 'required'
                ]); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('password', '', [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => 'Masukkan Password',
                  'required' => 'required'
                ], 'password'); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Konfirmasi Password <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('konfirmasiPassword', '', [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => 'Konfirmasi Password',
                  'required' => 'required'
                ], 'password'); ?>
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection(); ?>