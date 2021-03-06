              
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel col-md-12">
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                            <h4><i class="fa fa-angle-right"></i> Fasilitas </h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th><a class="btn btn-sm btn-info " href="<?= base_url('admin/tambah_fasilitas')?>"><i class="fa fa-plus"></i> Tambah Data</a></th>
                                  <th>Gambar</th>
                                  <th>Keterangan</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($fasilitas->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/edit_fasilitas/'.$row->id)?>"><i class="fa fa-pencil"> Edit</i></a>
                                      <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('adminprocess/hapus_gambar/'.$row->id)?>"><i class="fa fa-trash-o"> Hapus</i></a>
                                  </td>
                                  <td>
                                    <div class="project-wrapper" style="width: 100px;">
                                      <div class="project">
                                        <div class="photo-wrapper">
                                          <div class="photo">
                                            <a class="fancybox" href="<?= base_url()?>assets/img/<?= $row->gambar ?>"><img src="<?= base_url()?>assets/img/<?= $row->gambar ?>" style="width: 100px; height: auto;"></a>
                                          </div>
                                          <div class="overlay"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td><?= $row->keterangan?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->