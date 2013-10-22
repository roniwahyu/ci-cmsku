<?php $this->load->view('main/header');?>
       <div class="container-fluid">
        <div class="row-fluid">
            <div id="" class="brand span12">
                    <h1 class="">posts Management</h1>
            <a href="#" class="btn btn-success baru"><i class="icon-plus"></i>Add posts</a>

            </div>
            <div class="span12 kelola" style="display:none;">
                <div id="form_input" class="">
                <?php if(!empty($posts)){ echo var_dump($posts);}?>
                <?php echo form_open('posts/submit',array('id'=>'addform','class'=>'form form-vertical')); ?>
                    
                    <input type="hidden" value='' id="id" name="id">
                    
                    <div class="control-group">
                            <?php echo form_label('title : ','title',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('title','','id="title"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('content : ','content',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('content','','id="content"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('category_id : ','category_id',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('category_id','','id="category_id"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('created : ','created',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('created','','id="created"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('updated : ','updated',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('updated','','id="updated"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('user_id : ','user_id',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('user_id','','id="user_id"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('is_published : ','is_published',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('is_published','','id="is_published"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('is_page : ','is_page',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('is_page','','id="is_page"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('slug : ','slug',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('slug','','id="slug"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('is_deleted : ','is_deleted',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('is_deleted','','id="is_deleted"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('allow_comments : ','allow_comments',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('allow_comments','','id="allow_comments"'); ?>
                            </div>
                    </div>
                    
                    <button id="save" type="submit" class="btn btn-success"><icon class="icon-plus-sign"></icon> Add New</button>
                    <button id="save_edit" type="submit" class="btn btn-primary" style="display:none;"><icon class="icon-refresh"></icon> Update</button>
                    <a href="#" id="cancel_edit" class="btn btn-danger batal" style=""><i class="icon-remove"></i> Cancel</a>

                    <?php echo form_close();?>
                 </div>
            </div>
        </div>
            <div class="row-fluid">
                <div class="span12">
                    <h3>posts Lists</h3>
                    <table id="datatables" class="table table-condensed table-striped">
                        <thead class="">
                            <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>content</th>
                                            <th>category_id</th>
                                            <th>created</th>
                                            <th>updated</th>
                                            <th>user_id</th>
                                            <th>is_published</th>
                                            <th>is_page</th>
                                            <th>slug</th>
                                            <th>is_deleted</th>
                                            <th>allow_comments</th>
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
            "sAjaxSource":"<?php echo base_url();?>posts/getdatatables",
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
                { "sClass": "content", "sName": "content", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "category_id", "sName": "category_id", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "created", "sName": "created", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "updated", "sName": "updated", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "user_id", "sName": "user_id", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "is_published", "sName": "is_published", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "is_page", "sName": "is_page", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "slug", "sName": "slug", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "is_deleted", "sName": "is_deleted", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "allow_comments", "sName": "allow_comments", "sWidth": "80px", "aTargets": [ 1 ] },
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
                content:$('#content').val(),
                category_id:$('#category_id').val(),
                created:$('#created').val(),
                updated:$('#updated').val(),
                user_id:$('#user_id').val(),
                is_published:$('#is_published').val(),
                is_page:$('#is_page').val(),
                slug:$('#slug').val(),
                is_deleted:$('#is_deleted').val(),
                allow_comments:$('#allow_comments').val(),
                ajax:1
            };
            $(this).ready(function(){
                $.ajax({
                    url:"<?php echo base_url();?>posts/submit",
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
                        $('#content').val('');
                        $('#category_id').val('');
                        $('#created').val('');
                        $('#updated').val('');
                        $('#user_id').val('');
                        $('#is_published').val('');
                        $('#is_page').val('');
                        $('#slug').val('');
                        $('#is_deleted').val('');
                        $('#allow_comments').val('');
                       
                       // $('#name').focus();

                       
                    }
                });
            });
        }

        $("body").on("click",'.baru',function(e){
            e.preventDefault();
            // save(0);
            $('#id').val(''); 
            $('#title').val('');
            $('#content').val('');
            $('#category_id').val('');
            $('#created').val('');
            $('#updated').val('');
            $('#user_id').val('');
            $('#is_published').val('');
            $('#is_page').val('');
            $('#slug').val('');
            $('#is_deleted').val('');
            $('#allow_comments').val('');
            $('.kelola').show(200);
        });

        $("body").on("click",'.batal',function(e){
            e.preventDefault();
            // save(0);
            $('#id').val(''); 
            $('#title').val('');
            $('#content').val('');
            $('#category_id').val('');
            $('#created').val('');
            $('#updated').val('');
            $('#user_id').val('');
            $('#is_published').val('');
            $('#is_page').val('');
            $('#slug').val('');
            $('#is_deleted').val('');
            $('#allow_comments').val('');
            $('.kelola').fadeOut(100);
        });   

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
                        url:"<?php echo base_url();?>posts/get/"+id,
                        type:"get",
                        dataType:"json",
                        success:function(data){
                            $('#title').val(data.title);
                            $('#content').val(data.content);
                            $('#category_id').val(data.category_id);
                            $('#created').val(data.created);
                            $('#updated').val(data.updated);
                            $('#user_id').val(data.user_id);
                            $('#is_published').val(data.is_published);
                            $('#is_page').val(data.is_page);
                            $('#slug').val(data.slug);
                            $('#is_deleted').val(data.is_deleted);
                            $('#allow_comments').val(data.allow_comments);
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
                            url: "<?php echo base_url()?>posts/delete/",
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