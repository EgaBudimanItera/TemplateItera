<?php
$email = $this->session->userdata('user');
$query = $this->M_default->ambil_banyaK_kondisi('tb_pegawai', array('email' => $email));
$id = @$query->row()->id_pegawai;
?>
<script>
    $(document).ready(function(){
        var socket = io.connect('http://sms.itera.ac.id:3000');
        var $numberNotif = $("#numberNotif");
        var $listNotif = $("#listNotif");

        socket.emit('storeUserConnect', '<?php echo $id; ?>');

        socket.on('newNotif', function(data){
            toastr.info('Ada Notifikasi SK Baru, Silahkan Buka di Menu Notifikasi.', 'SIMUK', {timeOut: 10000});
            //update number of notif
            $numberNotif.html('');
            $numberNotif.html(data.num);

            //update list of notif
            $listNotif.html('');
            var notif = data.notif;          
            //console.log(notif);
            for(i=0;i<notif.length;i++){
                $listNotif.append("<li><a href='<?php echo base_url(); echo $this->session->userdata('privilleges');?>/detail_notif/"+notif[i]['id_notif']+"'>"+notif[i]['nama_sk'].substr(0,30)+"</a></li>");
            }
        });

        socket.on('newNotifBayar', function(data){
            toastr.info('Ada Notifikasi Pembayaran Baru, Silahkan Buka di Menu Notifikasi.', 'SIMUK', {timeOut: 10000});
        });

        socket.on('newNotifCancel', function(data){
            toastr.info('Ada Notifikasi Pembatalan Baru, Silahkan Buka di Menu Notifikasi.', 'SIMUK', {timeOut: 10000});
        });

    });
    

</script>