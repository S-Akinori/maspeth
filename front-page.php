<?php 
  get_header();
  $args = array(
    'numberposts ' => 4,
  );
  $posts = get_posts($args);
?>
  <div class="p-top-fv c-fv relative">
    <div class="p-top-fv__image active c-fv__image">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/fv-top.jpg" alt="ヒトのつながり、ココロのつながり" />
    </div>
    <div class="c-fv__text-container">
      <div>
        <div class="mx-auto"><img class="mx-auto" src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></div>
        <div class="c-fv__text-container__title">ヒトのつながり、ココロのつながり</div>  
      </div>
    </div>
    <div class="p-top-fv__owner">
      <div class="p-top-fv__owner__image">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/owner.jpg" width="200" height="200" alt="松本 萌夏" />
      </div>
      <div class="p-top-fv__owner__name">
        
      </div>
    </div>
  </div>
  <div id="topMessage" class="c-page-section c-container">
    <section>
      <div class="c-title-text">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main">ABOUT US</span>
          <h2 class="c-title-text__title u-text-center">「出会えて良かった」と思われるものを。</h2>
        </div>
        <div class="c-title-text__text u-text-center c-fade-in">
          <p>わたしたちNEXUSは「人のつながり」をテーマにしています。</p>
          <p>NEXUSが提供するサービスによってお客様に「良かった」と思っていただき、それが別の方々に広がっていく。</p>
          <p>そのような人と人がつながって全員が「良かった」と思える取り組みを行っています。</p>
        </div>
      </div>
    </section>
  </div>
  <div id="topService" class="p-top-service c-page-section">
    <section>
      <div class="c-title-text">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main">SERVICE</span>
          <h2 class="c-title-text__title u-text-center">NEXUSのサービス</h2>
        </div>
      </div>
      <div class="p-top-service__contents flex flex-wrap">
        <div class="p-4 md:w-1/3">
          <div class="p-top-service__contents__item relative aspect-square">
            <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service1.png" alt=""></div>
            <div class="p-top-service__contents__item__image__text relative p-4">
              <h3 class="text-main">日用雑貨販売</h3>
              <p>「あったらいいな」と思う商品を販売しております。お店では見られないユニークかつ画期的な日用雑貨がそろっております。</p>
              <div class="mt-4"><a href="https://nexus-109946.square.site" target="_blank" class="c-button">オンラインショップへ</a></div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="p-top-service__contents__item relative aspect-square">
            <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service5.jpg" alt=""></div>
            <div class="p-top-service__contents__item__image__text relative p-4">
              <h3 class="text-main">水素吸引機販売</h3>
              <p>どこでも持ち運べるに特化した水素吸引機を販売しております。簡単で使いやすく、体の調子を整えられる機械です。</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="p-top-service__contents__item relative p-top-service__contents__item--main3 aspect-square">
            <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service2.jpg" alt=""></div>
            <div class="p-top-service__contents__item__image__text relative p-4">
              <h3 class="text-main3">エステ事業</h3>
              <p>「オールハンドによる究極の癒しエステ」を開いています。機械ではなく手で行うことでお客様ごとに最適な施術を実現できます。</p>
              <div class="mt-4"><a href="https://beauty.nexus81.com" target="_blank" class="c-button c-button--main3">エステNEXUSへ</a></div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <div id="topEC" class="p-top-service c-page-section">
    <section>
      <div class="c-title-text mb-8">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main">GOODS</span>
          <h2 class="c-title-text__title u-text-center">日用雑貨</h2>
        </div>
        <div class="c-title-text__text u-text-center c-fade-in">
          <p>Nexusは皆様の心を惹きつける日用雑貨(あったらいいな)をテーマにした、全く新しい発想と企画で何処にもない、オリジナルティーをテーマに(1部特許取得済)商品群です。</p>
          <p>1度手にしたら必ず欲しくなるような、効果絶大な商品です。是非1度ご覧下さい。</p>
        </div>
      </div>
      <div class="flex flex-wrap">
        <div class="p-4 md:w-1/3 c-fade-in">
          <div class="c-box h-full">
            <a href="/" class="block">
              <div><img src="<?= get_template_directory_uri(); ?>/assets/images/product1.jpeg" alt=""></div>
              <div class="relative">
                <h3 class="mb-0 text-main">リガー</h3>
                <p>ビニール袋や紙類が上手にめくれる除菌保湿剤</p>
              </div>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 c-fade-in">
          <div class="c-box h-full">
            <a href="/" class="block">
              <div><img src="<?= get_template_directory_uri(); ?>/assets/images/product2.png" alt=""></div>
              <div class="relative">
                <h3 class="mb-0 text-main">オルクリン</h3>
                <p>洗浄、除菌、消臭がこれ１本でできる洗剤です。食器、洋服、床などさまざまな用途にも使えます。</p>
              </div>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 c-fade-in">
          <div class="c-box h-full">
            <a href="/" class="block">
              <div><img src="<?= get_template_directory_uri(); ?>/assets/images/product3.png" alt=""></div>
              <div class="relative">
                <h3 class="mb-0 text-main">匠-Takumi-</h3>
                <p>水分を通さず丈夫な生地でできたエコバッグです。小型ケースと一体型になっており、たたむと胸ポケットに入るほどコンパクトになります。</p>
              </div>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 c-fade-in">
          <div class="c-box h-full">
            <a href="/" class="block">
              <div><img src="<?= get_template_directory_uri(); ?>/assets/images/product4.png" alt=""></div>
              <div class="relative">
                <h3 class="mb-0 text-main">リバリー</h3>
                <p>丈夫で盗難対策もできる置き配ボックスです。持ち運びもしやすく災害時のバッグとしても重宝します。</p>
              </div>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/3 c-fade-in">
          <div class="c-box h-full">
            <a href="/" class="block">
              <div><img src="<?= get_template_directory_uri(); ?>/assets/images/product5.png" alt=""></div>
              <div class="relative">
                <h3 class="mb-0 text-main">ZEROスノー</h3>
                <p>雨水を循環し、雪を積もらせない雪下ろし機です。毎度業者に頼む費用を抑えたり積雪による事故防止にもつながります。</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="mt-4 text-center"><a href="https://nexus-109946.square.site" target="_blank" class="c-button">オンラインショップへ</a></div>
    </section>
  </div>
  <div id="topBeauty" class="c-page-section">
    <section>
      <div class="c-title-text mb-8 c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">BEAUTY</span>
          <h2 class="c-title-text__title u-text-center">社長自ら手がける「癒しのオールハンドエステ」</h2>
        </div>
        <div class="c-title-text__text u-text-center">
          <p>麻布十番に構えるエステでは機械を使わないオールハンドによる施術を行っています。</p>
          <p>お客様一人ひとりに向き合い、各々に最適な施術を行うことで美しさと癒しをご提供します。</p>
          <p>是非疲れた身体と心を癒やしに来て下さい。</p>
        </div>
      </div>
      <div class="text-center"><a href="https://beauty.nexus81.com" target="_blank" class="c-button">エステNEXUSへ</a></div>
    </section>
  </div>
  <div id="topBlog" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">NEWS</span>
          <h2 class="c-title-text__title u-text-center">ニュース</h2>
        </div>
      </div>
      <div>
        <ul>
          <?php foreach($posts as $post): setup_postdata($post); ?>
          <li class="border-b border-main py-4">
            <a href="<?php the_permalink() ?>" class="block h-full">
              <span><?php the_date() ?></span>
              <span class="text"><?php the_title(); ?></span>
            </a>
          </li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>
  </div>
  <div id="topContact" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">COMPANY</span>
          <h2 class="c-title-text__title u-text-center">会社情報</h2>
        </div>
      </div>
      <div class="md:flex">
        <div class="md:w-1/2 mb-4 md:mb-0 md:px-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.301757372516!2d139.3080480152073!3d35.3729710802673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019ab96105e961f%3A0x7c3ffa8580a62c2!2s3927-9%20Okazaki%2C%20Hiratsuka%2C%20Kanagawa%20259-1212!5e0!3m2!1sen!2sjp!4v1677480449814!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="md:w-1/2 md:px-4">
          <h3 class="text-main">株式会社NEXUS</h3>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">代表</div>
            <div>松本 萌夏</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">電話番号</div>
            <div>0463-59-6797</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">メールアドレス</div>
            <div>info@nexus81.com</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">住所</div>
            <div>神奈川県平塚市岡崎3927-9</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">営業時間</div>
            <div>平日：11:00～18:00</div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="topContact" class="c-page-section c-container relative">
    <section>
    <div class="md:flex">
        <div class="md:w-1/2 mb-4 md:mb-0 md:px-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.948308359583!2d139.7328464152152!3d35.65364518020082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ba1b13b8ded%3A0xaa439db0345efd4a!2z44CSMTA2LTAwNDUgVG9reW8sIE1pbmF0byBDaXR5LCBBemFidWrFq2JhbiwgMy1jaMWNbWXiiJI34oiSNSDjg57jgrnjgrPjg5Pjg6vpurvluIPlvJDnlarppKggMzAx!5e0!3m2!1sen!2sjp!4v1677480582714!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="md:w-1/2 md:px-4">
          <h3 class="text-main">エステNEXUS</h3>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">代表</div>
            <div>松本 萌夏</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">電話番号</div>
            <div>080-7400-9710</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">HP</div>
            <div><a href="https://beauty.nexus81.com" target="_blank">https://beauty.nexus81.com</a></div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">住所</div>
            <div>
              〒106-0045<br />
              東京都港区麻布十番3丁目7-5 マスコビル弐番館301号室
            </div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">営業時間</div>
            <div>11:00～18:00</div>
          </div>
          <!-- <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">定休日</div>
            <div>月曜日</div>
          </div> -->
          <div class="text-sm">
            麻布十番駅1番出口を出て、きらぼし銀行が目の前にあるので、その手前を右折し、直進します。<br />
            2個めの十字路(ひかり鶏という居酒屋さんが右手に見える所)が出てきますので、そこを渡り左へ直進します。<br />
            右手に階段(あさごやという飲食店さんが一階にございます)が出てきますので、そこを上がっていただき、3階301号室となります。
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="topContact" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">CONTACT</span>
          <h2 class="c-title-text__title u-text-center">お問い合わせ</h2>
        </div>
      </div>
      <?= do_shortcode('[ninja_form id=1]'); ?>
    </section>
  </div>
<?php get_footer(); ?>