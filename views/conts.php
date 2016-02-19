<?
require_once("./model/m_contact.php");
$m_contact = new M_contact;
$cont=$m_contact->get_contact()->result;    
?>
<!-- HEAD CONTENT ************************** -->
<style type="text/css">
    a.no-effect{
        text-decoration:none;
        font-family: 'rsu_b';
    font-size: 30px;
    color: #fff;
}
a.no-effect:hover{
    color: #ffcccc;
}
</style>
<div class="contact section s2 ">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="conts-info">
                    <img class="u-max-full-width" src="images/content/subpage/conts/jetpp.png">
                    <h5 class="value-heading"><?/*$any_lang[$_COOKIE["lang"]]['Dreams_support']*/?></h5>
                    <p class="value-description">
                    <?
                    $order   = array("\r\n", "\n", "\r");
                    $replace = array('<br>', '<br>', '<br>');
                    if ($_COOKIE["lang"]=="th") {
                                $newstr = str_replace($order, $replace, $cont[0]['detail']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;//."--".strlen($action[0]['detail_description']);
                            }else{
                                $newstr = str_replace($order, $replace, $cont[0]['detail_en']);
                                //$newstr = str_replace(" ", "&nbsp;", $newstr);
                                echo $newstr;
                            }
                            /*
                            AIA Capital Center 89 Floor 11th Unit 1108 Ratchadaphisek Road, Dindaeng
                        <br> Bangkok, 10400 Thailand
                        <br> Work: +66 2 248 4591 Fax: +66 2 248 2936
                            */
                    ?>
                        
                    </p>
                    <button class="email" onclick="mailto:<?=$cont[0]['email']?>"><a class="no-effect" href='mailto:<?=$cont[0]['email']?>'>Email Us</a></button>
                </div>
            </div>
        </div>
    </div>
    <img src="images/footer/footer-bg.png" class="end-bg">
</div>
<!-- END HEAD CONTENT ************************** -->
<!-- Footer ************************** -->

<div class="contact-foot section s7 fp-auto-height">
    <div class="container">
        <p class="section-description">Copyright © 2015 any i corporation company limited. All Rights Reserved</p>
    </div>
</div>
<!-- End Footer ************************** -->
</div> <!--end fullpage-->