<?php include 'head.php'; ?>

<main class="mdl-layout__content"> <!-- fecha em footer -->
    <div id="post-loop">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--9-col-desktop ">
                <?php for ($index = 1; $index < 8; $index++): ?>
                <section class="section--post mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white">
                        <img src="http://dummyimage.com/215x257/ccc/333" alt="" title="" />
                    </header>
                    <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card__supporting-text">
                            <h4>Features <span> <i class="fa fa-calendar mdl-textfield--align-right"></i> 12 SEP, 2015</span></h4>
                            Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--primary">
                                <i class="material-icons">add</i>
                            </button>
                        </div>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn<?=$index ;?>">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn<?=$index ;?>">
                        <div class='shareaholic-canvas' data-app='share_buttons' data-app-id='19171893'></div>
                    </ul>
                </section>   
                <?php endfor; ?>

            </div>
            <div class="mdl-cell mdl-cell--3-col-desktop">
                <div class="sidebar">
                    <div class="widget">
                        <div class="title">
                            <h4>Últimos Posts</h4>
                        </div>
                        <div class="last-content">
                            <div class="last-data">
                                <p><span>12</span><br/>SEP<br/>2015</p>
                            </div>
                            <a href="/" title="">Zend Framework 2 - Saiba como fazer sei que lá</a>
                        </div>
                        <div class="last-content">
                            <div class="last-data">
                                <p><span>12</span><br/>SEP<br/>2015</p>
                            </div>
                            <a href="/" title="">Zend Framework 2</a>
                        </div>
                        <div class="last-content">
                            <div class="last-data">
                                <p><span>12</span><br/>SEP<br/>2015</p>
                            </div>
                            <a href="/" title="">Zend Framework 2</a>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">
                            <h4>Publicidade</h4>
                        </div>
                        <img src="http://dummyimage.com/300x300/ccc/333" alt="" title="" />
                    </div>
                </div>
                
            </div>
        </div>


        <!--AQUI eh o loop-->

    </div>
    <?php include 'footer.php'; ?>
