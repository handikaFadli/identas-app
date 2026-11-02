<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IDENTAS — Ekosistem Digital untuk Sekolah</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <style>
    :root{--navy:#062b73;--blue:#1264d7;--yellow:#ffd21f;--paper:#f8f5ee;--ink:#092b6c;--muted:#66748b;--line:#d8dee7;--mint:#c9f1e4;--violet:#eee8ff}
    *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:var(--paper);color:var(--ink);font-family:'DM Sans',sans-serif}h1,h2,h3,p{margin:0}h1,h2,h3{font-family:'Space Grotesk',sans-serif}a{text-decoration:none;color:inherit}.wrap{max-width:1360px;margin:auto;padding:0 42px}.eyebrow{display:flex;align-items:center;gap:12px;font-size:10px;letter-spacing:.18em;text-transform:uppercase;font-weight:700}.eyebrow:after{content:"";width:48px;height:1px;background:currentColor;opacity:.45}.section{padding:78px 0}.section-head{display:grid;grid-template-columns:.8fr 1.2fr;gap:52px;margin-bottom:38px}.section-head h2{font-size:clamp(32px,4vw,54px);line-height:1;letter-spacing:-.055em}.section-head p{max-width:470px;color:var(--muted);font-size:16px;line-height:1.65}.nav{background:var(--navy);color:#fff}.nav-inner{height:78px;display:flex;align-items:center;justify-content:space-between;gap:24px}.brand{display:flex;align-items:center;gap:11px;font-weight:700;letter-spacing:.08em}.brand-mark{display:grid;grid-template-columns:9px 9px;grid-template-rows:9px 9px;gap:3px}.brand-mark i{background:var(--yellow)}.brand-mark i:nth-child(2),.brand-mark i:nth-child(3){background:#fff}.brand-mark i:last-child{background:var(--blue)}.nav-links{display:flex;gap:34px;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase}.nav-links a{opacity:.8}.nav-links a:hover{opacity:1;color:var(--yellow)}.button{display:inline-flex;align-items:center;justify-content:center;gap:22px;padding:14px 18px;border-radius:5px;background:var(--yellow);color:var(--navy);font-size:11px;font-weight:800;letter-spacing:.08em;text-transform:uppercase}.button.outline{background:transparent;color:#fff;border:1px solid rgba(255,255,255,.32)}
    .grid-pattern{background-image:linear-gradient(rgba(18,100,215,.045) 1px,transparent 1px),linear-gradient(90deg,rgba(18,100,215,.045) 1px,transparent 1px);background-size:40px 40px}.hero-glow{background:radial-gradient(circle at 78% 42%,rgba(18,100,215,.16),transparent 34%),var(--paper)}.hero{background-color:var(--paper)}.hero-grid{display:grid;grid-template-columns:.95fr 1.05fr;gap:28px;align-items:center;min-height:500px}.hero-copy{padding:58px 20px 54px 0;display:flex;flex-direction:column;justify-content:center}.hero-copy h1{font-size:clamp(48px,5.7vw,76px);line-height:1.02;letter-spacing:-.06em;text-transform:none;margin:20px 0 20px}.hero-copy h1 span{color:var(--blue)}.hero-copy p{max-width:515px;color:var(--muted);font-size:17px;line-height:1.6}.hero-actions{display:flex;gap:12px;margin-top:26px}.hero-art{display:flex;align-items:center;justify-content:flex-end;min-height:410px;padding:30px 0 30px 20px;position:relative;overflow:hidden;background:transparent}.hero-art:before{content:"";position:absolute;width:78%;height:68%;right:6%;top:16%;border-radius:50%;background:rgba(18,100,215,.1);filter:blur(42px)}.hero-art:after{content:"";position:absolute;width:430px;height:430px;right:8%;top:50%;transform:translateY(-50%);border:1px solid rgba(18,100,215,.18);border-radius:50%;box-shadow:0 0 0 42px rgba(18,100,215,.04)}.hero-art img{position:relative;width:100%;max-width:680px;max-height:470px;object-fit:contain;z-index:1;filter:drop-shadow(0 25px 35px rgba(2,36,93,.1))}.signal-rail{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid var(--line);border-bottom:1px solid var(--line);max-width:570px}.signal-rail div{display:flex;align-items:center;gap:9px;padding:12px 9px 12px 0;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.06em}.signal-rail div+div{padding-left:12px;border-left:1px solid var(--line)}.signal{display:grid;place-items:center;width:31px;height:31px;border-radius:50%;background:#d8e7ff;color:var(--blue);font-size:10px}.signal.yellow{background:var(--yellow);color:var(--navy)}.signal.mint{background:var(--mint);color:#16745e}.metrics{border-top:1px solid #d4d1ca;border-bottom:1px solid #d4d1ca}.metrics-grid{display:grid;grid-template-columns:1.35fr repeat(3,1fr);padding:32px 0}.metric{padding-left:28px;border-left:1px solid #d4d1ca}.metric strong{display:block;font:700 42px/1 'Space Grotesk'}.metric span{display:block;margin-top:10px;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
    .trust{padding:30px 0;border-bottom:1px solid var(--line);overflow:hidden}.trust-label{text-align:center;color:var(--muted);font-size:11px;letter-spacing:.16em;text-transform:uppercase;font-weight:700}.logos{overflow:hidden;margin-top:20px;mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent);-webkit-mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent)}.logos-track{display:flex;width:max-content;align-items:center;gap:22px;animation:logo-marquee 28s linear infinite}.logos-set{display:flex;align-items:center;gap:22px}.logos img{display:block;flex:0 0 76px;width:76px;height:48px;object-fit:contain;opacity:.7;filter:grayscale(.2)}
    @keyframes logo-marquee{from{transform:translateX(0)}to{transform:translateX(calc(-50% - 11px))}}
    @media (prefers-reduced-motion:reduce){.logos-track{animation:none}}
    .problem{background:#fff}.problem-layout{display:grid;grid-template-columns:.82fr 1.18fr;gap:68px;align-items:start}.problem-layout h2{font-size:clamp(34px,4vw,54px);line-height:1;letter-spacing:-.055em;margin-top:24px}.problem-lead{max-width:390px;margin-top:24px;color:var(--muted);font-size:16px;line-height:1.65}.problem-list{border-top:1px solid var(--line)}.row{display:grid;grid-template-columns:112px 1fr;gap:26px;padding:22px 0;border-bottom:1px solid var(--line)}.row small,.number{font-size:10px;letter-spacing:.13em;text-transform:uppercase;color:#8290a7;font-weight:700}.row h3{font-size:20px;margin-bottom:7px}.row p,.copy{color:var(--muted);line-height:1.65}.solution{background:var(--navy);color:#fff}.solution-layout{display:grid;grid-template-columns:.82fr 1.18fr;gap:68px;align-items:start}.solution-layout h2{font-size:clamp(34px,4vw,54px);line-height:1;letter-spacing:-.055em;margin-top:24px}.solution-lead{max-width:390px;margin-top:24px;color:rgba(255,255,255,.66);font-size:16px;line-height:1.65}.solution .eyebrow{color:var(--yellow)}.solution-grid{border-top:1px solid rgba(255,255,255,.22);border-bottom:1px solid rgba(255,255,255,.22)}.solution-item{display:grid;grid-template-columns:140px 1fr 200px;gap:20px;padding:22px 0;align-items:center}.solution-item+.solution-item{border-top:1px solid rgba(255,255,255,.16)}.solution-item strong{color:var(--yellow);font-size:11px;letter-spacing:.12em;text-transform:uppercase}.solution-item h3{font-size:21px}.solution-item p{color:rgba(255,255,255,.58);line-height:1.55}
    .features{background:var(--paper)}.feature-layout{display:grid;grid-template-columns:.82fr 1.18fr;gap:68px;align-items:start}.feature-layout h2{font-size:clamp(34px,4vw,54px);line-height:1;letter-spacing:-.055em;margin-top:24px}.feature-lead{max-width:390px;margin-top:24px;color:var(--muted);font-size:16px;line-height:1.65}.feature-catalog{display:grid;gap:18px}.feature-hero{display:grid;grid-template-columns:1fr 1fr;background:#fff;border:1px solid var(--line)}.feature-hero img{width:100%;height:100%;min-height:245px;object-fit:cover}.feature-hero .inside{padding:25px}.feature-hero h3{font-size:27px;margin:10px 0}.feature-hero .copy{font-size:14px}.feature-group{border-top:1px solid var(--line)}.feature-group-title{display:flex;align-items:center;justify-content:space-between;padding:14px 0;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--blue);font-weight:700}.feature-items{display:grid;grid-template-columns:1fr 1fr;border-top:1px solid var(--line)}.feature-item{display:grid;grid-template-columns:34px 1fr;gap:12px;padding:17px 18px 17px 0;border-bottom:1px solid var(--line)}.feature-item:nth-child(even){padding-left:18px;border-left:1px solid var(--line)}.feature-item:nth-last-child(-n+2){border-bottom:0}.feature-index{display:grid;place-items:center;width:26px;height:26px;border-radius:50%;background:#e5efff;color:var(--blue);font-size:10px;font-weight:800}.feature-item h3{font:700 16px/1.2 'Space Grotesk';margin:2px 0 5px}.feature-item p{color:var(--muted);font-size:13px;line-height:1.45}.tag{font-size:11px;color:var(--blue);letter-spacing:.13em;text-transform:uppercase;font-weight:700}.products{background:#fff}.product-list{border-top:1px solid var(--line)}.product{display:grid;grid-template-columns:160px 1fr 170px;gap:28px;align-items:center;padding:30px 0;border-bottom:1px solid var(--line)}.product img{width:150px;height:120px;object-fit:contain;justify-self:end}.product h3{font-size:28px;margin-bottom:8px}.process{background:var(--paper)}.process-layout{display:grid;grid-template-columns:.8fr 1.2fr;gap:70px}.steps{border-left:1px solid #b9c3d0;padding-left:34px}.step{position:relative;padding-bottom:38px}.step:before{content:"";position:absolute;left:-40px;top:3px;width:10px;height:10px;background:var(--blue);border-radius:50%;box-shadow:0 0 0 8px var(--paper)}.step h3{font-size:25px;margin:9px 0}.why{background:#e9f3f6}.why-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:70px}.principle{display:grid;grid-template-columns:150px 1fr;gap:22px;padding:24px 0;border-top:1px solid rgba(9,43,108,.22)}.principle h3{font-size:22px;margin-bottom:8px}.faq{background:#fff}.faq-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:70px}.faq-item{border-bottom:1px solid var(--line)}.faq-item button{border:0;background:none;color:var(--ink);width:100%;padding:22px 0;display:flex;justify-content:space-between;gap:20px;text-align:left;font:700 18px 'Space Grotesk';cursor:pointer}.faq-answer{display:none;padding:0 44px 22px 0;color:var(--muted);line-height:1.7}.faq-item.open .faq-answer{display:block}.faq-plus{font-size:25px;color:var(--blue)}.estimate{background:var(--navy);color:#fff}.estimate-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:70px}.estimate .eyebrow{color:var(--yellow)}.estimate-copy p{margin-top:24px;color:rgba(255,255,255,.66);font-size:18px;line-height:1.7}.estimate-note{margin-top:38px;border-left:2px solid var(--yellow);padding-left:16px;color:#fff;font-size:14px;line-height:1.6}.form{background:#fff;color:var(--ink);padding:32px}.form-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px}.form label{display:block;font-size:12px;font-weight:700}.form input,.form textarea{width:100%;margin-top:8px;padding:13px;border:1px solid #d4dbe5;border-radius:4px;font:inherit}.form textarea{min-height:95px}.form .button{border:0;width:100%;margin-top:22px;cursor:pointer}.footer{background:#041d4c;color:rgba(255,255,255,.65);padding:28px 0;font-size:13px}.footer-inner{display:flex;justify-content:space-between;align-items:center}.footer-brand{display:flex;align-items:center;gap:10px}.footer-brand img{width:32px;height:32px;object-fit:contain}
    .packages{background:#fff}.package-layout{display:grid;grid-template-columns:.72fr 1.28fr;gap:48px;align-items:start}.package-heading{display:block;margin-bottom:0}.package-layout h2{font-size:clamp(34px,4vw,54px);line-height:1;letter-spacing:-.055em;margin-top:24px}.package-lead{max-width:360px;margin-top:24px;color:var(--muted);font-size:15px;line-height:1.65}.package-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;align-items:stretch}.package-row{position:relative;display:flex;flex-direction:column;min-height:350px;padding:0;overflow:hidden;border:1px solid #d5dfec;border-radius:10px;background:#fff;box-shadow:0 10px 22px rgba(6,43,115,.06)}.package-row:nth-child(2){border:2px solid var(--yellow);background:#fff;box-shadow:0 14px 28px rgba(6,43,115,.12);transform:translateY(-6px)}.package-row:nth-child(2):before{content:"PALING POPULER";position:absolute;z-index:2;top:9px;right:9px;padding:5px 7px;border-radius:999px;background:var(--yellow);color:var(--navy);font-size:8px;font-weight:800;letter-spacing:.08em}.package-row:nth-child(3){border-color:#d9d0ff}.package-name{padding:17px 15px 15px;background:var(--blue);color:#fff;font:700 20px/1.1 'Space Grotesk'}.package-row:first-child .package-name{background:#0a4aa3}.package-row:nth-child(2) .package-name{background:var(--navy);color:#fff}.package-row:nth-child(3) .package-name{background:#6549cf;color:#fff}.package-name span{display:block;margin-top:6px;color:rgba(255,255,255,.76);font:700 9px/1.35 'DM Sans';letter-spacing:.1em;text-transform:uppercase}.package-row>div:nth-child(2){padding:16px 15px 15px}.package-row h3{font-size:16px;margin:0 0 6px}.package-row p{color:var(--muted);line-height:1.5;font-size:12px}.package-features{display:flex;flex-direction:column;gap:0;margin-top:13px;padding-top:0}.package-features span{display:flex;align-items:center;gap:7px;padding:7px 0;border:0;border-top:1px solid #e6ebf2;color:#3e5875;background:transparent;font-size:10px}.package-features span:before{content:"✓";display:grid;place-items:center;flex:0 0 16px;width:16px;height:16px;border-radius:50%;background:#dbeaff;color:var(--blue);font-size:9px;font-weight:800}.package-row:nth-child(2) .package-features span:before{background:#d9f5e8;color:#179163}.package-row:nth-child(3) .package-features span:before{background:#e7ddff;color:#6549cf}
    .product-layout{display:grid;grid-template-columns:.82fr 1.18fr;gap:68px;align-items:start}.product-layout h2{font-size:clamp(34px,4vw,54px);line-height:1;letter-spacing:-.055em;margin-top:24px}.product-lead{max-width:390px;margin-top:24px;color:var(--muted);font-size:16px;line-height:1.65}.product-layout .product-list{border-top:1px solid var(--line)}
    @media(max-width:800px){.wrap{padding:0 20px}.nav-links{display:none}.nav-inner{height:68px}.hero-grid,.section-head,.problem-layout,.solution-layout,.feature-layout,.package-heading,.product-layout,.process-layout,.why-grid,.faq-grid,.estimate-grid{grid-template-columns:1fr}.hero-copy{padding:70px 0 40px}.hero-art{padding:25px 0}.metrics-grid{grid-template-columns:1fr 1fr;gap:24px}.metrics-grid>div:first-child{grid-column:1/-1}.metric{padding-left:16px}.solution-item,.product{grid-template-columns:1fr;gap:10px}.product img{justify-self:start}.feature-hero{grid-template-columns:1fr}.feature-hero img{height:190px;min-height:0}.feature-items{grid-template-columns:1fr}.feature-item:nth-child(even){padding-left:0;border-left:0}.feature-item:nth-last-child(-n+2){border-bottom:1px solid var(--line)}.feature-item:last-child{border-bottom:0}.package-cards{grid-template-columns:1fr}.package-row{min-height:0}.row{grid-template-columns:1fr;gap:10px}.logos{overflow:auto;justify-content:flex-start}.form-grid{grid-template-columns:1fr}.section{padding:76px 0}.hero-copy h1{font-size:clamp(52px,16vw,90px)}.signal-rail{grid-template-columns:1fr 1fr}.signal-rail div:nth-child(3){border-left:0;padding-left:0;border-top:1px solid var(--line)}.signal-rail div:nth-child(4){border-top:1px solid var(--line)}}
    /* Continuous section rhythm: one canvas, fewer hard breaks. */
    .section{position:relative;padding-block:88px}
    .trust{background:var(--paper);border-bottom:0;padding-block:26px 34px}
    .problem,.features,.process{background:var(--paper)}
    .products,.faq{background:#fff}
    .why{background:#eef5f5}
    .problem,.features,.products,.process,.why,.faq,.estimate{border:0}
    .problem:before,.features:before,.products:before,.process:before,.why:before,.faq:before{content:"";position:absolute;top:0;left:50%;width:min(1360px,calc(100% - 84px));height:1px;transform:translateX(-50%);background:linear-gradient(90deg,transparent,rgba(120,139,162,.22),transparent)}
    .problem-layout,.solution-layout,.product-layout,.feature-layout{position:relative}
    .solution{margin-block:18px;box-shadow:0 18px 48px rgba(6,43,115,.08)}
    .estimate{margin-top:18px}
    @media(max-width:800px){.section{padding-block:72px}.problem:before,.features:before,.products:before,.process:before,.why:before,.faq:before{width:calc(100% - 40px)}.solution{margin-block:10px}}
    .trust{padding-bottom:44px;border-bottom:1px solid #dce4ed}
    #masalah{margin-top:24px;background:#fff}
    #masalah:before{background:linear-gradient(90deg,transparent,rgba(18,100,215,.28),transparent)}
    .packages{padding-bottom:44px;border-bottom:1px solid #dce4ed}
    #produk{margin-top:24px}
    .process{padding-block:62px}
    .process-layout{gap:48px}
    .process-layout h2{font-size:clamp(32px,3.6vw,50px)!important}
    .process .step{padding-bottom:22px}
    .process .step h3{font-size:20px;margin:6px 0}
    .process .step .copy{font-size:14px;line-height:1.5}
    .hero-grid{min-height:410px}
    .hero-copy{padding-block:38px}
    .hero-copy h1{font-size:clamp(44px,4.8vw,66px);margin-block:16px}
    .hero-copy p{font-size:15px;line-height:1.55}
    .hero-actions{margin-top:20px}
    .hero-art{min-height:340px;padding-block:18px;overflow:visible;justify-content:center}
    .hero-art img{max-height:330px;margin-inline:auto}
    .hero-art:before{width:68%;height:74%;right:8%;top:13%;filter:blur(32px)}
    .hero-art:after{width:330px;height:330px;right:50%;transform:translate(50%,-50%);box-shadow:0 0 0 28px rgba(18,100,215,.04)}
    @media(max-width:800px){.hero-grid{min-height:0}.hero-copy{padding-block:52px 28px}.hero-copy h1{font-size:clamp(44px,14vw,76px)}.hero-art{min-height:260px;padding-block:10px}.hero-art img{max-height:260px}.hero-art:after{width:250px;height:250px;right:50%;transform:translate(50%,-50%)}}

    /* Mobile layout guardrails: keep every content block inside the viewport. */
    @media (max-width: 800px) {
      body { overflow-x: hidden; }
      .wrap { width: 100%; padding-inline: 20px; }
      .hero-copy { padding-inline: 0; }
      .hero-copy h1 { max-width: 12ch; font-size: clamp(42px, 13vw, 64px); }
      .hero-copy p { max-width: none; }
      .hero-art { width: 100%; min-height: 250px; padding-inline: 0; }
      .hero-art img { width: min(100%, 420px); max-height: 250px; }
      .hero-art:after { width: min(250px, 80vw); height: min(250px, 80vw); }
      .signal-rail { width: 100%; }
      .signal-rail div { min-width: 0; }
      .signal-rail div span:last-child { overflow-wrap: anywhere; }
      .logos { margin-inline: -20px; }
      .logos-track, .logos-set { gap: 16px; }
      .logos img { flex-basis: 64px; width: 64px; height: 42px; }
      .package-layout { grid-template-columns: 1fr; gap: 28px; }
      .package-lead { max-width: none; }
      .package-cards {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        margin-inline: -20px;
        padding: 0 20px 18px;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
      }
      .package-cards::-webkit-scrollbar { display: none; }
      .package-row {
        flex: 0 0 min(320px, calc(100vw - 48px));
        scroll-snap-align: start;
        border-radius: 14px;
        box-shadow: 0 8px 20px rgba(6, 43, 115, .08);
      }
      .section h2,
      .package-layout h2,
      .product-layout h2,
      .process-layout h2,
      .why-grid h2,
      .faq-grid h2,
      .estimate-grid h2 {
        font-size: clamp(30px, 8.5vw, 38px) !important;
        line-height: 1.06 !important;
      }
      .section p,
      .section .copy {
        font-size: 15px;
        line-height: 1.6;
      }
      .problem-lead,
      .solution-lead,
      .feature-lead,
      .package-lead,
      .product-lead,
      .estimate-copy p { font-size: 15px !important; }
      .principle { grid-template-columns: 100px 1fr; gap: 14px; padding: 20px 0; }
      .principle h3 { font-size: 18px; line-height: 1.2; }
      .step h3 { font-size: 18px; line-height: 1.25; }
      .package-row p { font-size: 12px; line-height: 1.5; }
      .feature-item p { font-size: 13px; line-height: 1.45; }
      .why { padding-block: 56px; }
      .why-grid { gap: 32px; }
      .why-grid > div:first-child p { margin-top: 16px !important; }
      .why-grid .principle { padding-block: 16px; }
      .faq { padding-block: 56px; }
      .faq-grid { gap: 32px; }
      .faq-grid > div:first-child p { margin-top: 16px !important; }
      .faq-item button { padding-block: 16px; font-size: 16px; line-height: 1.3; }
      .faq-answer { padding: 0 24px 16px 0; font-size: 14px; line-height: 1.55; }
      .estimate { padding-block: 56px; }
      .estimate-grid { gap: 32px; }
      .estimate-grid > div:first-child p { margin-top: 16px !important; }
      .estimate-note { margin-top: 24px; padding-left: 12px; font-size: 13px; line-height: 1.5; }
      .estimate .form { padding: 20px 16px; }
      .form input[type="checkbox"] { width: 16px; height: 16px; margin: 0; flex: 0 0 16px; }
      .form fieldset .form-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
      .form fieldset label { display: flex; align-items: center; gap: 8px; line-height: 1.35; }
      .problem { padding-block: 56px; }
      .problem-layout { gap: 32px; }
      .problem-layout h2 { margin-top: 16px; }
      .problem-lead { margin-top: 16px; }
      .row { gap: 8px; padding-block: 18px; }
      .row h3 { font-size: 18px; line-height: 1.25; }
      .solution { padding-block: 56px; margin-block: 0; }
      .solution-layout { gap: 32px; }
      .solution-layout h2 { margin-top: 16px; }
      .solution-lead { margin-top: 16px; }
      .solution-item { padding-block: 18px; }
      .solution-item h3 { font-size: 18px; line-height: 1.25; }
      .solution-item p { font-size: 14px; line-height: 1.5; }
      .solution-item { grid-template-columns: 1fr; gap: 8px; }
      .product { grid-template-columns: 1fr; gap: 12px; }
      .product img { width: 140px; height: 110px; justify-self: start; }
      .product-list { border-top: 0; display: grid; gap: 16px; }
      .product { padding: 20px; border: 1px solid var(--line); border-radius: 14px; background: #fff; box-shadow: 0 8px 20px rgba(6, 43, 115, .06); }
      .feature-item { min-width: 0; }
      .package-row:nth-child(2) { transform: none; }
      .form { padding: 22px 18px; }
      .footer-inner { align-items: flex-start; flex-direction: column; gap: 14px; }
    }
  </style>
</head>
<body>
  <main>
    <section id="hero" class="hero grid-pattern hero-glow"><div class="wrap hero-grid"><div class="hero-copy"><div class="eyebrow">01 / Kartu pelajar & digitalisasi sekolah</div><h1>Satu identitas.<br><span>Akses tanpa batas.</span></h1><p>Mulai dari kartu pelajar untuk kebutuhan identitas siswa, lalu dikembangkan sebagai solusi digital sesuai kebutuhan sekolah.</p><div class="hero-actions"><a class="button" href="#estimasi">Mulai dari kebutuhan <span>→</span></a></div><div style="display:flex;flex-wrap:wrap;gap:18px;margin-top:18px;color:var(--muted);font-size:13px"><span>✓ Real-time</span><span>✓ Paperless</span><span>✓ Terintegrasi</span><span>✓ Aman</span></div></div><div class="hero-art"><img src="{{ asset('image/header-2.png') }}" alt="Ekosistem IDENTAS: kartu pintar, mesin presensi, dan aplikasi mobile"></div></div></section>
    <section class="trust"><div class="wrap"><div class="trust-label">Dipercaya oleh sekolah dan institusi pendidikan</div><div class="logos" aria-label="Mitra IDENTAS"><div class="logos-track">@for ($set = 0; $set < 2; $set++)<div class="logos-set">@for ($client = 1; $client <= 8; $client++)<img src="{{ asset('image/client' . $client . '.png') }}" alt="Mitra IDENTAS">@endfor</div>@endfor</div></div></div></section>

    <section id="masalah" class="section problem"><div class="wrap problem-layout"><div><div class="eyebrow">02 / Permasalahan sekolah</div><h2>Ketika banyak hal masih dikerjakan secara manual.</h2><p class="problem-lead">Sebelum sistem saling terhubung, aktivitas sekolah berjalan dengan catatan, formulir, dan pesan yang tersebar. Pekerjaan tetap selesai, tetapi membutuhkan waktu dan tenaga yang lebih besar.</p></div><div class="problem-list"><div class="row"><div class="number">01 / Administrasi</div><div><h3>Pekerjaan yang sama diulang berkali-kali</h3><p>Data siswa, guru, kelas, dan aktivitas sering perlu ditulis atau dipindahkan kembali ke banyak dokumen dan sistem.</p></div></div><div class="row"><div class="number">02 / Informasi</div><div><h3>Data tersimpan di tempat yang berbeda</h3><p>Catatan kertas, spreadsheet, grup chat, dan aplikasi terpisah membuat sekolah sulit menemukan informasi yang paling terbaru.</p></div></div><div class="row"><div class="number">03 / Keputusan</div><div><h3>Situasi sekolah baru terlihat setelah direkap</h3><p>Ketika laporan masih disusun manual, pimpinan dan tim sekolah membutuhkan waktu lebih lama untuk memahami kondisi dan menentukan langkah berikutnya.</p></div></div></div></div></section>

    <section id="solusi" class="section solution"><div class="wrap solution-layout"><div><div class="eyebrow">03 / Solusi IDENTAS</div><h2>Satu identitas, tiga titik temu.</h2><p class="solution-lead">Kartu siswa menjadi penghubung antara kehadiran, layanan, dan informasi—tanpa memaksa sekolah mengubah semuanya dalam satu hari.</p></div><div class="solution-grid"><div class="solution-item"><strong>Di gerbang</strong><h3>Identitas dikenali saat siswa hadir.</h3><p>Presensi QR, RFID, lokasi, atau Face ID.</p></div><div class="solution-item"><strong>Di aktivitas</strong><h3>Layanan sekolah berjalan dari data yang sama.</h3><p>Kantin, perpustakaan, ibadah, dan kebutuhan lain.</p></div><div class="solution-item"><strong>Di laporan</strong><h3>Informasi lebih siap dibaca dan ditindaklanjuti.</h3><p>Dashboard untuk melihat aktivitas sekolah.</p></div></div></div></section>

    <section id="fitur" class="section packages"><div class="wrap package-layout"><div class="package-heading"><div><div class="eyebrow">04 / Paket IDENTAS</div><h2>Pilih paket yang sesuai dengan kesiapan sekolah.</h2></div><p class="package-lead">Setiap sekolah bisa memulai dari kebutuhan yang paling dekat, lalu memperluas layanan ketika fondasinya sudah siap. Paket berikut membantu melihat ruang tumbuhnya tanpa membebani sekolah sejak awal.</p></div><div class="package-cards"><article class="package-row"><div class="package-name">Paket Standar<span>Mulai dari fondasi</span></div><div><h3>Digitalisasi presensi sekolah</h3><p>Solusi dasar untuk membangun identitas siswa dan alur kehadiran yang lebih tertib.</p><div class="package-features"><span>Desain kartu</span><span>QR Code + RFID</span><span>Aplikasi presensi</span><span>Rekap otomatis</span><span>Notifikasi orang tua</span><span>Mesin presensi</span></div></div></article><article class="package-row"><div class="package-name">Paket Smart<span>Untuk manajemen terintegrasi</span></div><div><h3>Lebih banyak layanan dalam satu ekosistem</h3><p>Semua fondasi Paket Standar dengan layanan tambahan untuk aktivitas dan administrasi sekolah.</p><div class="package-features"><span>Semua fitur Standar</span><span>Desain kartu bebas</span><span>Face Recognition</span><span>E-Kantin</span><span>E-Perpus</span><span>E-SPP</span><span>AI Kepala Sekolah</span></div></div></article><article class="package-row"><div class="package-name">Paket Premium<span>Untuk digitalisasi menyeluruh</span></div><div><h3>Ekosistem sekolah yang lebih lengkap</h3><p>Rangkaian layanan lanjutan untuk sekolah yang siap menghubungkan operasional, administrasi, dan layanan digital.</p><div class="package-features"><span>Semua fitur Smart</span><span>Lanyard + cover kartu</span><span>AI Buat Soal</span><span>AI Administrasi Guru</span><span>Website sekolah</span><span>E-PPDB</span></div></div></article></div></div></section>

    <section id="produk" class="section products"><div class="wrap product-layout"><div><div class="eyebrow">05 / Produk yang didapatkan</div><h2>Yang diterima sekolah, bukan hanya login.</h2><p class="product-lead">IDENTAS hadir sebagai kombinasi identitas fisik dan layanan digital yang bisa dipakai dalam aktivitas sehari-hari.</p></div><div class="product-list"><div class="product"><div class="number">Fisik</div><div><h3>Kartu IDENTAS</h3><p class="copy">Kartu siswa dengan identitas yang dapat menjadi pintu masuk ke layanan sekolah.</p></div><img src="{{ asset('image/identas-smart-card-new.png') }}" alt="Kartu pintar IDENTAS"></div><div class="product"><div class="number">Digital</div><div><h3>Dashboard & aplikasi</h3><p class="copy">Rangkaian layanan untuk membantu sekolah mencatat, memantau, dan mengelola aktivitas.</p></div><img src="{{ asset('image/sekolah.png') }}" alt="Aplikasi sekolah IDENTAS"></div></div></div></section>

    <section class="section process"><div class="wrap process-layout"><div><div class="eyebrow">06 / Cara kerja aplikasi</div><h2 style="font-size:clamp(38px,5vw,64px);line-height:.98;margin-top:24px;letter-spacing:-.055em">Satu identitas menghubungkan seluruh aktivitas sekolah.</h2><p class="copy" style="font-size:18px;margin-top:24px">Setiap aktivitas dimulai dari identitas yang sama, lalu tercatat di layanan yang tepat dan dapat dipantau oleh orang yang membutuhkan.</p></div><div class="steps"><div class="step"><div class="number">01 / Identitas</div><h3>Siswa memiliki satu identitas digital</h3><p class="copy">Data siswa terhubung dengan kartu dan profil aplikasi. Tidak perlu membuat identitas baru untuk setiap layanan sekolah.</p></div><div class="step"><div class="number">02 / Akses</div><h3>Identitas digunakan di berbagai layanan</h3><p class="copy">Kartu, QR, RFID, geo location, atau Face ID digunakan sesuai kebutuhan—untuk presensi, kantin, perpustakaan, dan aktivitas lainnya.</p></div><div class="step"><div class="number">03 / Catatan</div><h3>Setiap aktivitas tercatat otomatis</h3><p class="copy">Transaksi, kehadiran, peminjaman, dan kegiatan tersimpan dalam sistem sehingga tidak perlu dipindahkan ulang antarcatatan.</p></div><div class="step"><div class="number">04 / Pantau</div><h3>Sekolah membaca data dari dashboard</h3><p class="copy">Guru, admin, pimpinan, dan orang tua mendapatkan informasi sesuai perannya untuk memantau kondisi dan mengambil tindakan lebih cepat.</p></div></div></div></section>

    <section class="section why"><div class="wrap why-grid"><div><div class="eyebrow">07 / Mengapa IDENTAS</div><h2 style="font-size:clamp(38px,5vw,64px);line-height:.98;margin-top:24px;letter-spacing:-.055em">Teknologi yang bekerja dengan ritme sekolah.</h2><p class="copy" style="font-size:18px;margin-top:24px">Bukan menambah satu sistem lagi untuk dirawat. IDENTAS dirancang agar identitas, aktivitas, dan laporan dapat bertemu di tempat yang lebih masuk akal.</p></div><div><div class="principle"><div class="number">Prinsip 01</div><div><h3>Mulai dari yang penting</h3><p class="copy">Sekolah dapat memulai dari presensi, lalu memperluas layanan sesuai kebutuhan.</p></div></div><div class="principle"><div class="number">Prinsip 02</div><div><h3>Data tidak dibuat ulang</h3><p class="copy">Identitas yang sama membantu aktivitas sekolah saling terhubung.</p></div></div><div class="principle"><div class="number">Prinsip 03</div><div><h3>Orang tetap memegang keputusan</h3><p class="copy">Teknologi membantu membaca situasi; keputusan tetap berada di tangan tim sekolah.</p></div></div></div></div></section>

    <section id="faq" class="section faq"><div class="wrap faq-grid"><div><div class="eyebrow">08 / Sebelum mulai</div><h2 style="font-size:clamp(38px,5vw,64px);line-height:.98;margin-top:24px;letter-spacing:-.055em">Hal yang biasanya ingin diketahui sekolah.</h2><p class="copy" style="font-size:18px;margin-top:24px">Kalau kebutuhan sekolah Anda belum tertulis di sini, ceritakan saja lewat formulir di bawah.</p></div><div><div class="faq-item"><button type="button"><span>Apakah IDENTAS hanya berupa kartu siswa?</span><b class="faq-plus">+</b></button><div class="faq-answer">Tidak. Kartu adalah titik awal. IDENTAS dapat berkembang ke presensi, transaksi, aktivitas, dashboard, dan layanan digital lain sesuai kebutuhan sekolah.</div></div><div class="faq-item"><button type="button"><span>Haruskah semua fitur dipakai sejak awal?</span><b class="faq-plus">+</b></button><div class="faq-answer">Tidak. Kami justru menyarankan sekolah memulai dari satu kebutuhan yang paling jelas, lalu memperluasnya setelah alurnya berjalan.</div></div><div class="faq-item"><button type="button"><span>Bagaimana menentukan titik awalnya?</span><b class="faq-plus">+</b></button><div class="faq-answer">Tim IDENTAS akan melihat jumlah siswa, alur kerja, dan prioritas sekolah sebelum memberi rekomendasi. Tidak ada paket yang dipaksakan.</div></div></div></div></section>

    <section id="estimasi" class="section estimate"><div class="wrap estimate-grid"><div class="estimate-copy"><div class="eyebrow">09 / Formulir estimasi biaya</div><h2 style="font-size:clamp(38px,5vw,64px);line-height:.98;margin-top:24px;letter-spacing:-.055em">Ceritakan bagian sekolah yang ingin dibenahi.</h2><p>Data ini membantu tim IDENTAS menyiapkan percakapan yang relevan—bukan mengirimkan penawaran yang tidak perlu.</p><div class="estimate-note">Setelah dikirim, detail kebutuhan akan diteruskan ke tim kami melalui WhatsApp.</div></div><form id="estimate-form" action="{{ route('consultation.store') }}" method="POST" class="form">@csrf<input type="hidden" name="paket" value="Smart"><div class="form-grid"><label>Nama lengkap<input name="nama_lengkap" required placeholder="Nama Anda"></label><label>Jabatan<input name="jabatan" required placeholder="Kepala Sekolah / Yayasan"></label><label>Nomor WhatsApp<input name="nomor_whatsapp" required placeholder="08xxxxxxxxxx"></label><label>Nama sekolah<input name="nama_sekolah" required placeholder="Nama sekolah"></label><label>Jumlah siswa<input name="jumlah_siswa" type="number" min="1" required placeholder="Contoh: 800"></label><label>Jumlah guru<input name="jumlah_guru" type="number" min="1" required placeholder="Contoh: 60"></label></div><fieldset style="border:0;padding:0;margin:20px 0 0"><legend style="font-size:12px;font-weight:700">Kebutuhan utama</legend><div class="form-grid" style="margin-top:10px"><label style="display:flex;align-items:center;gap:8px;font-weight:400"><input type="checkbox" name="kebutuhan_fitur[]" value="Presensi Digital"> Presensi digital</label><label style="display:flex;align-items:center;gap:8px;font-weight:400"><input type="checkbox" name="kebutuhan_fitur[]" value="E-Kantin"> E-Kantin</label><label style="display:flex;align-items:center;gap:8px;font-weight:400"><input type="checkbox" name="kebutuhan_fitur[]" value="E-Keuangan"> E-Keuangan</label><label style="display:flex;align-items:center;gap:8px;font-weight:400"><input type="checkbox" name="kebutuhan_fitur[]" value="AI & Administrasi"> AI & administrasi</label></div></fieldset><button class="button" type="submit">Kirim kebutuhan sekolah <span>→</span></button></form></div></section>
  </main>
  <footer class="footer"><div class="wrap footer-inner"><div class="footer-brand"><img src="{{ asset('logo/logo-identas-white.png') }}" alt="IDENTAS"><span>© 2026 IDENTAS. Smart school ecosystem.</span></div><a href="#hero">Kembali ke atas ↑</a></div></footer>
  <script>document.querySelectorAll('.faq-item button').forEach(button=>button.addEventListener('click',()=>{const item=button.parentElement;item.classList.toggle('open');button.setAttribute('aria-expanded',item.classList.contains('open'));}));</script>
</body>
</html>


