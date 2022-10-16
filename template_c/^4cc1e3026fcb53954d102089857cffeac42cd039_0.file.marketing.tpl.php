<?php
/* Smarty version 3.1.30, created on 2020-02-19 13:54:33
  from "/home/amper856/public_html/amperium_test_site/template/custom/marketing.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e4d3e1925dc74_26547533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc1e3026fcb53954d102089857cffeac42cd039' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/template/custom/marketing.tpl',
      1 => 1580929395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e4d3e1925dc74_26547533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-sm-12">
        <div class="content-box-1">
            <div class="title text-left">
                <div class="heading mb-5 py-4">Marketing <span
                            class="py-2 px-4 bg-pc-normal font-weight-bold text-white mt-n3">Material</span>
                    <span class="sub-title ml-3">Public Material for <b>Marketing</b> Intentions</span>
                </div>

            </div>

            <div class="content">

                <div class="marketing">
                    <ul class="nav nav-pills mb-45 nav-justified " id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab"
                               aria-controls="pills-one" aria-selected="true">Banners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab"
                               aria-controls="pills-two" aria-selected="false">Logo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab"
                               aria-controls="pills-three" aria-selected="false">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-four" role="tab"
                               aria-controls="pills-four" aria-selected="false">Presentations</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel"
                             aria-labelledby="pills-one-tab">
                            <img src="https://placeimg.com/728/90/any" />
                            <img src="https://placeimg.com/728/90/any" />
                            <img src="https://placeimg.com/728/90/any" />


                        </div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                            <img src="https://placeimg.com/125/125/any" />
                            <img src="https://placeimg.com/125/125/any" />
                            <img src="https://placeimg.com/125/125/any" />
                        </div>
                        <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">...
                        </div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">...
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
