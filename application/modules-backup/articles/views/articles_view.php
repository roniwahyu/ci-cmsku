<?php $this->load->view('main/header');?>
       <div class="container-fluid">
        <div class="row-fluid">
            <div id="" class="brand span12">
                    <h1 class="">articles Management</h1>
            </div>
            <div class="span12 kelola" style="display:none;">
                <div id="form_input" class="">
                <?php if(!empty($articles)){ echo var_dump($articles);}?>
                <?php echo form_open('articles/submit',array('id'=>'addform','class'=>'form form-vertical')); ?>
                    
                    <input type="hidden" value='' id="id" name="id">
                    
                    <div class="control-group">
                            <?php echo form_label('title : ','title',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('title','','id="title"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('slug : ','slug',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('slug','','id="slug"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('pubdate : ','pubdate',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('pubdate','','id="pubdate"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('body : ','body',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('body','','id="body"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('created : ','created',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('created','','id="created"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('modified : ','modified',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('modified','','id="modified"'); ?>
                            </div>
                    </div>
                    
                    <button id="save" type="submit" class="btn btn-success"><icon class="icon-plus-sign"></icon> Add New</button>
                    <button id="save_edit" type="submit" class="btn btn-primary" style="display:none;"><icon class="icon-refresh"></icon> Update</button>

                    <?php echo form_close();?>
                 </div>
            </div>
            <div class="span12">

                <table id="datatables" class="table table-condensed table-striped">
                    <thead class="">
                        <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>slug</th>
                                        <th>pubdate</th>
                                        <th>body</th>
                                        <th>created</th>
                                        <th>modified</th>
                                        <th>Actions</th>
                                    </tr>
                    </thead>

                    <tbody class="table-bordered">
                        <tr>
                            <td colspan="6" class="dataTables_empty">Loading data...</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

<?php $this->load->view('main/footer');?>
<script>
    $(document).ready(function(){
        $("#date").datepicker();
         $('#selectallcheck').click (function () {
             var checkedStatus = this.checked;
            $('#datatables tbody tr').find('td:last :checkbox').each(function () {
                $(this).prop('checked', checkedStatus);
             });
        });
        //declare all html button as jqery button
        $("button").button();

        oTable=$('#datatables').dataTable({
            "sAjaxSource":"<?php echo base_url();?>articles/getdatatables",
            "sScrollY": "300px",
            "sServerMethod": "POST",
            "bServerSide": true,
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "bAutoWidth": false,
            "bDeferRender": true,
            "bSortClasses": false,
            "bScrollCollapse": true,    
            "bStateSave": true,
            "aoColumns": [
                
                { "sClass": "id","sName": "id","sWidth": "50px", "aTargets": [0] } ,
                { "sClass": "title", "sName": "title", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "slug", "sName": "slug", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "pubdate", "sName": "pubdate", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "body", "sName": "body", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "created", "sName": "created", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "modified", "sName": "modified", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "100px","mData": 0,
                    "mDataProp": function(data, type, full) {
                    return "<div class='btn-group'><button class='edit btn btn-mini btn-success' id='"+data[0]+"'><icon class='icon-pencil'></icon></button><button class='delete btn btn-mini btn-danger'id='"+data[0]+"'><icon class='icon-remove'></icon></button><button class='detail btn btn-mini btn-primary' id='"+data[0]+"'><icon class='icon-cog'></icon></button></div>";
                }},
                
            ],
        });

        function save(id){
            var dataform={
                id:$('#id').val(),
                title:$('#title').val(),
                slug:$('#slug').val(),
                pubdate:$('#pubdate').val(),
                body:$('#body').val(),
                created:$('#created').val(),
                modified:$('#modified').val(),
                ajax:1
            };
            $(this).ready(function(){
                $.ajax({
                    url:"<?php echo base_url();?>articles/submit",
                    data:dataform,
                    type:"POST",
                    success:function(){
                        $('button#save').fadeIn(200);
                        $('button#save_edit').hide(200);
                        $('.kelola').fadeOut(200);
                        
                        oTable.fnClearTable( 0 );
                        oTable.fnDraw();

                       
                        $('#id').val(''); 
                        $('#title').val('');
                        $('#slug').val('');
                        $('#pubdate').val('');
                        $('#body').val('');
                        $('#created').val('');
                        $('#modified').val('');
                       
                       // $('#name').focus();

                       
                    }
                });
            });
        }
        $("#addnew form").submit(function(e){   
            e.preventDefault();
            save(0);
        });
        
        $("body").on("click","#save",function(e){
            e.preventDefault();
            save(0);
        });
        
        $("body").on("click","#save_edit",function(e){
        
            e.preventDefault();
                var id=$(this).attr("id");
                save(id);
            
        });     

        $('body').on("click",".edit",function(e){
            e.preventDefault();
            var id=$(this).attr("id");
            $(this).ready(function(){
                    $.ajax({
                        url:"<?php echo base_url();?>articles/get/"+id,
                        type:"get",
                        dataType:"json",
                        success:function(data){
                            $('#title').val(data.title);
                            $('#slug').val(data.slug);
                            $('#pubdate').val(data.pubdate);
                            $('#body').val(data.body);
                            $('#created').val(data.created);
                            $('#modified').val(data.modified);
                            $('#id').val(data.id);

                            $('button#save').hide(200);
                            $('button#save_edit').fadeIn(200);
                            $('.kelola').fadeIn(200);
                            
                            oTable.fnClearTable( 0 );
                            oTable.fnDraw();
                        }
                    });
            });
            
        });


        $("body").on("click",".delete",function(e){
            e.preventDefault();
                var del_data={
                    id:$(this).attr("id"),
                    ajax:1
                }
                if(confirm('Are You Sure?')){
                    $(this).ready(function(){
                            
                        $.ajax({
                            url: "<?php echo base_url()?>articles/delete/",
                            type: 'POST',
                            data: del_data,
                            success:function(msg){
                                oTable.fnDraw(true);
                            }
                        });
                    });
                }
        });


        
    });
</script>
</body>
</html>