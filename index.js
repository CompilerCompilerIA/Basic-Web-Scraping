const puppeteer = require('puppeteer');
const path = require('path');
const websites = require('./websites.json');
const fs = require('fs');
(async () => {
  const browser = await puppeteer.launch({ headless: false });
  const page = await browser.newPage();
  for (const website of websites) {
    const scriptPath = path.join(__dirname, 'scripts', website.scriptName);
    await require(scriptPath)(page, website);
    console.log('Scraping done for', website.name);
  
  }
})();

let scrape = async () => {
  const browser = await puppeteer.launch({headless: true});
  const page = await browser.newPage();
 //await page.goto('https://www.youtube.com/gaming/trending');
  await page.goto('https://www.youtube.com/c/NintenDúoES/videos');
 //await page.goto('https://www.youtube.com/c/eurogamerspain/videos');

  var links =[]
  for (var i=1; i<=10; i++){ 
      var href = await page.$$eval("ytd-grid-video-renderer.style-scope:nth-child("+i+") > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > h3:nth-child(1) > a:nth-child(2)", el => el.map(x => x.getAttribute("href")));
      //var src = await page.$$eval("ytd-grid-video-renderer.style-scope:nth-child("+i+") > div:nth-child(1) > ytd-thumbnail:nth-child(1) > a:nth-child(1) > yt-img-shadow:nth-child(1) > img:nth-child(1)", el => el.map(x => x.getAttribute("src")));
      var src = await page.evaluate('document.querySelector("ytd-grid-video-renderer.style-scope:nth-child('+i+') >  div:nth-child(1) ytd-thumbnail:nth-child(1) a:nth-child(1)  img:nth-child(1) ").getAttribute("src")');
      href="https://www.youtube.com"+href;
      links.push({href,src});
  }
  browser.close();

  fs.writeFileSync(
    path.join(__dirname, `scripts/links.json`),
    JSON.stringify(links),
    'utf8'
  );

  return links; // Return the data
};


scrape().then((value) => {
  console.log(value);  
});


