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
        <div class="p-top-service__contents__item relative md:w-1/3 aspect-square">
          <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service1.png" alt=""></div>
          <div class="p-top-service__contents__item__image__text relative p-4">
            <h3 class="text-main">日用雑貨販売</h3>
            <p>「あったらいいな」と思う商品を販売しております。お店では見られないユニークかつ画期的な日用雑貨がそろっております。</p>
          </div>
        </div>
        <div class="p-top-service__contents__item relative md:w-1/3 aspect-square">
          <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service2.jpg" alt=""></div>
          <div class="p-top-service__contents__item__image__text relative p-4">
            <h3 class="text-main">エステ事業</h3>
            <p>「オールハンドによる究極の癒しエステ」を開いています。機械ではなく手で行うことでお客様ごとに最適な施術を実現できます。</p>
          </div>
        </div>
        <div class="p-top-service__contents__item relative md:w-1/3 aspect-square">
          <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service3.jpg" alt=""></div>
          <div class="p-top-service__contents__item__image__text relative p-4">
            <h3 class="text-main">法人向けの社会保険の削減のコンサル</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
        <div class="p-top-service__contents__item relative md:w-1/3 aspect-square">
          <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service4.jpg" alt=""></div>
          <div class="p-top-service__contents__item__image__text relative p-4">
            <h3 class="text-main">商用車向けの自動運転のシステム</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
        <div class="p-top-service__contents__item relative md:w-1/3 aspect-square">
          <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/service5.jpg" alt=""></div>
          <div class="p-top-service__contents__item__image__text relative p-4">
            <h3 class="text-main">水素吸引機販売</h3>
            <p>どこでも持ち運べるに特化した水素吸引機を販売しております。簡単で使いやすく、体の調子を整えられる機械です。</p>
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
          <p>日常生活に「あったらいいな」と思うようなものを販売しております。</p>
          <p>特許取得済なので、ユニークかつ効果の期待できる、そして他では手に入りづらい商品がそろっております。</p>
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
        </div>
      </div>
      <div class="text-center"><a href="https://beauty.nexus81.com" target="_blank" class="c-button">エステについて</a></div>
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
        <div class="md:w-1/2 mb-4 md:mb-0 md:px-4"><iframe class="w-full h-full object-cover" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d529.282541540753!2d139.73235713887905!3d35.6629451419601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b826ae3281d%3A0xf2a258ed2d09f4e!2sRoppongi%20Sta.!5e0!3m2!1sen!2sjp!4v1676967688067!5m2!1sen!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="md:w-1/2 md:px-4">
          <h3 class="text-main">株式会社NEXUS</h3>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">代表</div>
            <div>松本 萌夏</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-40 pr-4">電話番号</div>
            <div>000-0000-000</div>
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