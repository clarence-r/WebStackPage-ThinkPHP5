<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\MrF\FyNavigation\public/../application/admin\view\links\add.html";i:1586621707;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>添加链接</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/admin/css/font.css">
        <link rel="stylesheet" href="/static/admin/css/xadmin.css">
        <script type="text/javascript" src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="javascript:void(0);">首页</a>
            <a href="javascript:void(0);">链接管理</a>
            <a>
              <cite>添加链接</cite></a>
          </span>
          <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
        </div>

        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                      <div class="layui-fluid">
                        <div class="layui-row">
                            <form class="layui-form">
                              <div class="layui-form-item">
                                  <label class="layui-form-label"><span class="x-red">*</span>图标路径</label>
                                  <div class="layui-input-inline">
                                      <input type="text" name="link_icon" lay-verify="required" id="inputimgurl" placeholder="图片地址" value="/static/uploads/default.jpg" class="layui-input">
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                 <label class="layui-form-label">图标预览</label>
                                  <div class="layui-input-inline">
                                      <div class="layui-upload-list" style="margin:0">
                                          <img src="/static/uploads/default.jpg" id="srcimgurl" class="layui-upload-img">
                                      </div>
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">上传图标</label>
                                  <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                      <button type="button" class="layui-btn layui-btn-primary" id="editimg">上传新图标</button >
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">链接图标的尺寸比例为1:1即正方形,大小在1M以内</div>
                              </div>

                              <div class="layui-form-item">
                                  <label for="link_name" class="layui-form-label">
                                      <span class="x-red">*</span>链接名称
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="text" id="link_name" name="link_name" required="" lay-verify="link_name"
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>目标站名称
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                  <label for="link_address" class="layui-form-label">
                                      <span class="x-red">*</span>链接地址
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="text" id="link_address" name="link_address" required="" lay-verify="link_address"
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>带http[s]://的完整Url
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                  <label for="mt_id" class="layui-form-label">
                                      <span class="x-red">*</span>添加到分类</label>
                                  <div class="layui-input-inline">
                                      <select id="mt_id" name="mt_id" class="valid">
                                          <?php foreach($mlist as $m): ?>
                                          <option value="<?php echo $m['id']; ?>"><?php echo $m['type_name']; ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>若无分类请先添加
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                  <label for="link_note" class="layui-form-label">
                                      <span class="x-red">*</span>备注/说明
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="text" id="link_note" name="link_note" required="" lay-verify="link_note"
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>目标站描述
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                  <label for="link_order" class="layui-form-label">
                                      <span class="x-red">*</span>链接排序
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="number" id="link_order" name="link_order" required="" lay-verify="link_order" value="1" 
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>数字越大排序越靠前(默认1)
                                  </div>
                              </div>
                              
                              <div class="layui-form-item">
                                  <label for="L_repass" class="layui-form-label">
                                  </label>
                                  <button  class="layui-btn" lay-filter="add" lay-submit="">
                                      添加
                                  </button>
                              </div>
                          </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <script type="text/javascript" src="/static/admin/cropper/cropper.js"></script> -->
        <script>
          layui.config({
            base: '/static/cropper/' //layui自定义layui组件目录
          }).use(['form', 'layer','croppers'],
            function() {
                $ = layui.jquery,
                form = layui.form,
                croppers = layui.croppers,
                layer = layui.layer;

                 //创建一个头像上传组件
                croppers.render({
                    elem: '#editimg'
                    ,saveW:150     //保存宽度
                    ,saveH:150
                    ,mark:1/1    //选取比例
                    ,area:'900px'  //弹窗宽度
                    ,url: "/admin/uploads.html"  //图片上传接口返回和（layui 的upload 模块）返回的JOSN一样
                    ,done: function(url){ //上传完毕回调
                        $("#inputimgurl").val(url);
                        $("#srcimgurl").attr('src',url);
                    }
                });

                //自定义验证规则
                form.verify({
                    link_address: [/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/, '请输入正确的Url'],
                    link_order: [/^[1-9]\d*$/, '排序必须填入正整数'],
                });

                //监听提交
                form.on('submit(add)', function(data) {
                    $.post('/admin/links', data.field, function(data, textStatus, xhr) {
                      if (data.code == 1) {
                          // 定时器
                          setTimeout(function() {
                              window.parent.location.reload(); //成功后刷新父界面
                          }, 1000);
                          // 弹出提示
                          layer.alert(data.msg, {
                              icon: 6
                          }, function() {
                              // 获得frame索引
                              var index = parent.layer.getFrameIndex(window.name);
                              //关闭当前frame
                              parent.layer.close(index);
                          });
                      } else {
                          layer.alert(data.msg, {
                              icon: 5
                          });
                      }
                  }, 'json');
                  return false;
                });

            });
        </script>
        
    </body>

</html>
