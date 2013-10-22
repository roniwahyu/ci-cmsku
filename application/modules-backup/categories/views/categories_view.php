<?php $this->load->view('main/header');?>
       <div class="container-fluid">
        <div class="row-fluid">
            <div id="" class="brand span12">
                    <h1 class="">categories Management</h1>
            </div>
            <div class="span12 kelola" style="display:none;">
                <div id="form_input" class="">
                <?php if(!empty($categories)){ echo var_dump($categories);}?>
                <?php echo form_open('categories/submit',array('id'=>'addform','class'=>'form form-vertical')); ?>
                    
                    <input type="hidden" value='' id="id" name="id">
                    
                    <div class="control-group">
                            <?php echo form_label('name : ','name',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('name','','id="name"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('user_id : ','user_id',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('user_id','','id="user_id"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('is_default : ','is_default',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('is_default','','id="is_default"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('slug : ','slug',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('slug','','id="slug"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('description : ','description',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('description','','id="description"'); ?>
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
                                        <th>name</th>
                                        <th>user_id</th>
                                        <th>is_default</th>
                                        <th>slug</th>
                                        <th>description</th>
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
            "sAjaxSource":"<?php echo base_url();?>categories/getdatatables",
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
                { "sClass": "name", "sName": "name", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "user_id", "sName": "user_id", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "is_default", "sName": "is_default", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "slug", "sName": "slug", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "description", "sName": "description", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "100px","mData": 0,
                    "mDataProp": function(data, type, full) {
                    return "<div class='btn-group'><button class='edit btn btn-mini btn-success' id='"+data[0]+"'><icon class='icon-pencil'></icon></button><button class='delete btn btn-mini btn-danger'id='"+data[0]+"'><icon class='icon-remove'></icon></button><button class='detail btn btn-mini btn-primary' id='"+data[0]+"'><icon class='icon-cog'></icon></button></div>";
                }},
                
            ],
        });

        function save(id){
            var dataform={
                id:$('#id').val(),
                name:$('#name').val(),
                user_id:$('#user_id').val(),
                is_default:$('#is_default').val(),
                slug:$('#slug').val(),
                description:$('#description').val(),
                ajax:1
            };
            $(this).ready(function(){
                $.ajax({
                    url:"<?php echo base_url();?>categories/submit",
                    data:dataform,
                    type:"POST",
                    success:function(){
                        $('button#save').fadeIn(200);
                        $('button#save_edit').hide(200);
                        $('.kelola').fadeOut(200);
                        
                        oTable.fnClearTable( 0 );
                        oTable.fnDraw();

                       
                        $('#id').val(''); 
                        $('#name').val('');
                        $('#user_id').val('');
                        $('#is_default').val('');
                        $('#slug').val('');
                        $('#description').val('');
                       
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
                        url:"<?php echo base_url();?>categories/get/"+id,
                        type:"get",
                        dataType:"json",
                        success:function(data){
                            $('#name').val(data.name);
                            $('#user_id').val(data.user_id);
                            $('#is_default').val(data.is_default);
                            $('#slug').val(data.slug);
                            $('#description').val(data.description);
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
                            url: "<?php echo base_url()?>categories/delete/",
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