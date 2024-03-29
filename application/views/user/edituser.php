<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?= $title;  ?></h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <!-- bisa ditambah button disini -->
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->

                        <!--end::Wizard Nav-->
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                        <form enctype='multipart/form-data' class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" method="post" action="">
                                            <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                        <h5 class="text-dark font-weight-bold mb-10">Edit User</h5>
                                                        <!--begin::Group-->

                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row fv-plugins-icon-container has-danger">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nama
                                                                Lengkap</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control form-control-lg" type="text" name="nama" value="<?= $row['nama']; ?>">
                                                                <?= form_error('nama', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row fv-plugins-icon-container has-danger">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control form-control-lg" type="text" name="email" value="<?= $row['email']; ?>">
                                                                <?= form_error('email', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <div class="form-group row fv-plugins-icon-container has-danger">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nomor
                                                                Hp</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input disabled class="form-control form-control-lg" type="text" name="no_hp" value="<?= $row['no_hp']; ?>">
                                                                <?= form_error('no_hp', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>

                                                            </div>
                                                        </div>
                                                        <div class="form-group row fv-plugins-icon-container has-danger">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control form-control-lg" type="text" name="alamat" autocomplete="on" value="<?= $row['alamat']; ?>">
                                                                <?= form_error('alamat', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row fv-plugins-icon-container has-danger">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Role</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select class="form-control" name="role" id="cform-control form-control-lg">
                                                                    <?php foreach ($role as $rl) : ?>
                                                                        <?php if ($rl == $row['role']) : ?>
                                                                            <option value="<?= $rl ?>" selected><?= $rl  ?>
                                                                            </option>
                                                                        <?php else : ?>
                                                                            <option value="<?= $rl ?>"><?= $rl  ?></option>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                                            <div class="col-lg-3 col-xl-3">
                                                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(<?= base_url() ?>assets/images/users/<?= $row['image'] ?>)">
                                                                    <div class="image-input-wrapper" style="background-image: url(<?= base_url() ?>assets/images/users/<?= $row['image'] ?>)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 align-self-end">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!--end::Wizard Step 1-->
                                                    <!--begin::Wizard Step 2-->

                                                    <!--begin::Wizard Actions-->
                                                    <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                        <div class="mr-2">
                                                            <button class="btn btn-light-primary font-weight-bolder px-9 py-4" id="prev-step" type="button" data-wizard-type="action-prev">Previous</button>
                                                        </div>
                                                        <div>
                                                            <a href="<?= base_url('user') ?>" class="btn btn-success font-weight-bolder px-9 py-4" id="next-step" type="" data-wizard-type="action-next">Kembali</a>
                                                            <button class="btn btn-primary font-weight-bolder px-9 py-4" id="next-step" type="submit" data-wizard-type="action-next">Simpan</button>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Actions-->
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">

            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>