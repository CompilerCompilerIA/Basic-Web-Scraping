const fs = require('fs');
const path = require('path');
module.exports = async (page, website) => {
  const { selectors } = website;

 await page.goto(website.url);
  //await page.waitForSelector(selectors.trendsLink);
  //await page.click(selectors.trendsLink);
  await page.waitForSelector(selectors.trendListTag);
  const trendsText = await page.evaluate((trendListTag) => {
    const trendList = document.querySelectorAll(trendListTag);
    const trendsText = [];
    for (const trend of trendList) {
      trendsText.push(trend.innerText);   
    }
   return trendsText;
  }, selectors.trendListTag);


  const regExp = new RegExp('[A-z]+');
  const trends = [];
  for (const text of trendsText) {
    const textSplited = text.split('\n').filter((txt) => regExp.test(txt));
    const textSplitedP = textSplited[2].split('·').filter((txt) => regExp.test(txt));
    const textSplitedPoint = text.split('·').filter((txt) => regExp.test(txt));
    const newTrend = {
      title: textSplited[0],
      channel: textSplited[1],
      dtAdded: textSplited[3],
      views: textSplitedP[0],
      dtRAdded: textSplitedPoint[1],
     
    };
    trends.push(newTrend);
  }


  fs.writeFileSync(
    path.join(__dirname, `${website.scriptName}.json`),
    JSON.stringify(trends),
    'utf8'
  );



};