<?php
include('head.php');
?>
<title>Our Products</title>
<meta name="description" content="">
</head>

<body>
    <?php
    include('gtm.php')
    ?>
    <div class="page-wraper">

        <?php
        include('nav.php');
        ?>
        <style>
            .tab-content {
                display: none;
            }

            .tab-content.active {
                display: block;
            }

            .tab-btn.active {
                font-weight: bold;
            }

            .site-filters li.active a {
                color: #f2aa75 !important;
            }

            .shop-card-one ul li {
                width: 22%;
                display: flex;
                gap: 10px;
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
                align-items: baseline;
            }

            .shop-card-one ul {
                display: flex;
                gap: 20px;
                /* justify-content: space-between; */
                flex-wrap: wrap;
            }

            .shop-card-one img {
                mix-blend-mode: multiply;
                height: 7rem;
                object-fit: contain;
                display: block;
                margin: 10px auto 10px auto;
                border: none;
                overflow: hidden;

            }

            @media screen and (max-width:768px) {
                .shop-card-one ul li {
                    width: 100%;
                }
            }

            .shop-card-one {
                margin-top: 20px;
            }

            .btth {
                border-right: 2px solid #c4c4c4 !important;
            }

            .site-filters li {
                margin-right: 0px !important;
            }

            .filters li a {
                padding: 10px 20px;
                display: inline-block;
                color: #000000;
                text-decoration: none;
                transition: background-color 0.3s;
            }

            .content-inner-1 {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .content-inner {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            @keyframes zoomInUp {
                0% {
                    transform: translateY(100%);
                    opacity: 0;
                }



                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .zoom-in-up {
                animation: zoomInUp 2s ease forwards;
            }
        </style>

        <section class="content-inner overflow-hidden bg-light" style="background: url('./images/aboutus/banner-about-mla.png');">
            <div class="container">
                <div class="row about-style1 align-items-center zoom-in-up visible">
                    <div class="col-lg-12 text-center">
                        <div class="position-relative">
                            <div class="about-thumb-1 ">

                                <div class="section-head">
                                    <h2 class="title">Our Products </h2>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="content-inner-1 zoom-in-up">
            <div class="container">
                <div class="section-head">
                    <h2 class="title text-center">Most Popular Products</h2>
                </div>

                <div class="site-filters clearfix d-flex justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <ul class="filters" data-bs-toggle="buttons">
                        <li class="btn tab-btn active btth" data-tab="UNISIL">
                            <a href="javascript:void(0);">UNISIL</a>
                        </li>
                        <li class="btn tab-btn btth" data-tab="UNIFLOW">
                            <a href="javascript:void(0);">UNIFLOW</a>
                        </li>
                        <li class="btn tab-btn btth" data-tab="UNICELL">
                            <a href="javascript:void(0);">UNICELL</a>
                        </li>
                        <li class="btn tab-btn btth" data-tab="TULSI">
                            <a href="javascript:void(0);">TULSI BRAND</a>
                        </li>
                        <li class="btn tab-btn btth" data-tab="UNISTAB">
                            <a href="javascript:void(0);">UNISTAB</a>
                        </li>
                        <li class="btn tab-btn btth" data-tab="ZINCOSIL">
                            <a href="javascript:void(0);">ZINCOSIL</a>
                        </li>
                        <li class="btn tab-btn" data-tab="UNILUB">
                            <a href="javascript:void(0);">UNILUB</a>
                        </li>
                    </ul>
                </div>

                <div class="clearfix">
                    <ul id="masonry" class="row g-xl-4 g-3" style="position: relative; height: 862.4px;">
                        <li class="card-container col-md-12 tab-content UNISIL active">
                            <div class="shop-card-one">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/unnisils.jpg" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="silica.html">Precipitated silica</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unisil/Al_Sil_NK_20A_HS_06.pdf">Sodium Aluminium Silicate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="silicate.html">Hydrated Calcium Silicate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="#">Calcium Sulphate</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </li>
                        <li class="card-container col-md-12 tab-content UNIFLOW">
                            <div class="shop-card-one">

                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/uniflows.jpg" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/uniflow/Zn_St_DLI_13.pdf">Zinc stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/uniflow/Ca_St_DLI_petro_07.pdf">Calcium stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/uniflow/Al_St_Super_05.pdf">Aluminium stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/uniflow/MgSt_MS_PRM_03.pdf">Magnesium stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/uniflow/sodium_stearate_UNIFLOW_MC_powder_01.pdf">Sodium stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/uniflow/barium_stearate_UNIFLOW_BS_01.pdf">Barium stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="#">Lithium Stearate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="#">Potassium Stearate</a></li>
                                        </ul>
                                    </div>
                                </div>



                            </div>
                        </li>
                        <li class="card-container col-md-12 tab-content UNICELL">
                            <div class="shop-card-one">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/unicells.jpg" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unicell/ADC_Combined_specs.pdf">Exothermic blowing agents (AC)</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unicell/UNICELL_NC_7500.pdf">Endothermic blowing agents (NC)</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </li>
                        <li class="card-container col-md-12 tab-content TULSI">
                            <div class="shop-card-one">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/tulsis.JPG" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="clays.html">Snow white levigated clay</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/tulsi/TULSI_069_HT.pdf">Calcined clay</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="aluminium.html">Aluminium silicate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="talc.html">Talc</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="barytes.doc">Barytes</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="dolomite.html">Calcite / dolomite</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </li>
                        <li class="card-container col-md-12 tab-content UNISTAB">
                            <div class="shop-card-one">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/unistabs.jpg" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/stabilizers_one_packs.pdf">Stabilizers (one packs)</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/UNISTAB_TBLS.pdf">TBLS</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/UNISTAB_DBLS.pdf">DBLS</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/UNISTAB_LEAD_STEARATE.pdf">LS</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/UNISTAB_DBLPh.pdf">DBL Phosphite</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/UNISTAB_DBLP.pdf">DBL Pthalate</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unistab/UNISTAB_CZ_C55.pdf">Non-toxic ca-zn based stabilizers</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </li>
                        <li class="card-container col-md-12 tab-content ZINCOSIL">
                            <div class="shop-card-one">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/zincosills.jpg" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="zinc.html">Zinc oxide active</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="zincoxide.html">Zinc oxide transparent</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </li>
                        <li class="card-container col-md-12 tab-content UNILUB">
                            <div class="shop-card-one">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="images/brandss/unilubs.JPG" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <ul class="b-list-markers f-list-markers">
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/unilub_dosage_chart.pdf" class="various">One pack lubricants</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/UNILUB_PE_7.pdf">PE wax</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/UNILUB_PFW_1.pdf">Paraffin wax substitute</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/UNILUB_SA.pdf">Stearic acid</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/UNIFLOW_UNIMUL.pdf">GMS</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/UNILUB_WAX_E_P_200a.pdf">Amide wax</a></li>
                                            <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <a href="download/unilub/UNILUB_PS.pdf">PETS</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section>


        <style>
            .mySwiperproductpage .f-list-markers {
                border-radius: 13px;
                /* width: 50%; */
                margin: auto;
                /* box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px; */
                padding: 25px 24px 25px 24px;
                background-color: #fff;
                border: 1px solid #FF9800;
            }

            .productstabs ul li {
                display: flex;
                gap: 10px;
                align-items: baseline;
            }

            .productstabs ul li a:hover {
                color: #FF9800;
            }

            .application-tab:before {
                opacity: 0.1;
            }
        </style>


        <section class="content-inner zoom-in-up productstabs application-tab  pbt-100 overlay-black-light" style="background-image:url(images/appit.jpg); background-repeat: no-repeat; background-size: cover;background-position: top;">
            <div class="container">
                <div class="row about-style2 align-items-xl-center align-items-start wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="col-lg-5  mb-3">
                        <div class="section-head">
                            <h2 class="title">Pharma Excipients</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-3">
                        <div class="about-content">
                            <div class="style-1">

                                <div class="pagination-align justify-content-end">
                                    <div class="tranding-button-prev btn-prev">
                                        <i class="flaticon flaticon-left-chevron"></i>
                                    </div>
                                    <div class="tranding-button-next btn-next">
                                        <i class="flaticon flaticon-chevron"></i>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="swiper mySwiperproductpage">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <ul class="b-list-markers f-list-markers">
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/MAGNESIUM STEARATE (1).pdf"> Magnesium stearate</a>
                                            <a href="download/pharmaceuticals-excipients/Magnesium_Stearate_IP_TDS.pdf">IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Magnesium_Sterate_BP_TDS.pdf">BP</a>/
                                            <a href="download/pharmaceuticals-excipients/Magnesium_Sterate_USP_TDS.pdf">USP</a></span>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/CALCIUM CARBONATE (10).pdf">Calcium carbonate</a>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/ALUMINIUM STEARATE EP (16).pdf">Aluminium stearate ep</a>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/PURIFIED SILICIOUS EARTH (21).pdf">Purified silicious earth</a>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/ALUMINIUM MONOSTERATE (25).pdf">Aluminium monosterate</a>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/SODIUM  ALUMINIUM SILICATE (30).pdf">Sodium aluminium silicate</a>

                                        </li>

                                    </ul>
                                </div>
                                <div class="swiper-slide">
                                    <ul class="b-list-markers f-list-markers">
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <span> <a href="MLA PDFs/CALCIUM STEARATE (2).pdf">Calcium stearate</a>
                                            <a href="download/pharmaceuticals-excipients/Calcium_Stearate_IP_TDS.pdf">IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Calcium_Sterate_BP_TDS.pdf">BP</a>/
                                            <a href="download/pharmaceuticals_excipients/.pdf">USP</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i> <span><a href="MLA PDFs/ZINC OXIDE (6).pdf">Zinc oxide</a>
                                            <a href="download/pharmaceuticals-excipients/Zinc_Oxide_IP_TDS.pdf">IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Zinc_Oxide_BP_TDS.pdf">BP</a>/
                                            <a href="download/pharmaceuticals-excipients/Zinc_Oxide_USP_TDS.pdf">USP</a></span>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/PRECIPITATED CALCIUM CARBONATE (11).pdf">Precipitated calcium Carbonate</a><span>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/STARCH (17).pdf">Starch</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/NATURAL ALUMINUM SILICATE (22).pdf">Natural aluminum silicate</a></span>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/GLYCERYL MONO STERATE (26).pdf">Glyceryl mono sterate</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/SORBITAN MONOSTERATE (31).pdf">Sorbitan monosterate</a></span>

                                        </li>

                                    </ul>
                                </div>

                                <div class="swiper-slide">
                                    <ul class="b-list-markers f-list-markers">
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/ZINC STEARATE (3).pdf">Zinc stearate</a>
                                            <a href="download/pharmaceuticals-excipients/Zinc_Sterate_IP_TDS.pdf">IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Zinc_Sterate_BP_TDS.pdf">BP</a>/
                                            <a href="download/pharmaceuticals-excipients/Zinc_Sterate_USP_TDS.pdf">USP</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/TALC (7).pdf">Talc</a>
                                            <a href="download/pharmaceuticals-excipients/.pdf">IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Talc_BP_TDS.pdf">BP</a>/
                                            <a href="download/pharmaceuticals-excipients/Talc_IP_TDS.pdf">USP</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/CALCIUM HYDROXIDE (12).pdf">Calcium hydroxide</a>

                                        </li>
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/BENTONITE (18).pdf">Bentonite</a>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/SYNTHETIC ALUMINUM SILICATE (23).pdf">Synthetic aluminum silicate</a>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/MAGNESIUM HYDROXIDE (27).pdf">Magnesium hydroxide</a>

                                        </li>



                                    </ul>
                                </div>

                                <div class="swiper-slide">
                                    <ul class="b-list-markers f-list-markers">
                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/SODIUM STERATE (4).pdf">Sodium sterate</a>
                                            <a href="download/pharmaceuticals-excipients/Sodium_Sterate_BP_TDS.pdf">BP</a>/
                                            <a href="download/pharmaceuticals-excipients/Sodium_Sterate_USP_TDS.pdf">USP</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><span><a href="MLA PDFs/KAOLIN  (8).pdf">Kaolin</a>
                                            <a href="download/pharmaceuticals-excipients/Kaolin_Heavy_IP_TDS.pdf">Heavy-IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Kaolin_Heavy_BP_TDS.pdf">Heavy-BP</a>/
                                            <a href="download/pharmaceuticals-excipients/Kaolin_Heavy_USP_TDS.pdf">Heavy-USP</a>
                                            <a href="download/pharmaceuticals-excipients/Kaolin_Light_IP_TDS.pdf">Light-IP</a>/
                                            <a href="download/pharmaceuticals-excipients/Kaolin_Light_BP_TDS.pdf">Light-BP</a></span>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/ZINC CARBONATE (15).pdf">Zinc carbonate</a>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/BARIUM SULFATE (20).pdf">Barium sulfate</a>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/STEARIC ACID (24).pdf">Stearic acid</a>

                                        </li>

                                        <li><i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico"></i><a href="MLA PDFs/SILICON DI-OXIDE (28).pdf">Silicon di-oxide</a>

                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>

            </div>

        </section>









        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.tab-btn');
                const contents = document.querySelectorAll('.tab-content');

                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        tabs.forEach(t => t.classList.remove('active'));
                        contents.forEach(c => c.classList.remove('active'));

                        tab.classList.add('active');
                        document.querySelector(`.tab-content.${tab.getAttribute('data-tab')}`).classList.add('active');
                    });
                });
            });
        </script>

    </div>
    <?php include('footer.php') ?>