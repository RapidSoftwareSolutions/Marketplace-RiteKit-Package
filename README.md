[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/RiteKit/functions?utm_source=RapidAPIGitHub_RiteKitFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# RiteKit Package
RiteKit team continues to add facets to the social media toolkit that is already the world’s most automated, user-friendly and the most integrated into your existing work-flow. RiteKit aim has never wavered: the maximum views, engagement and link click-throughs on everything you share socially.
* Domain: [ritekit.com](https:\/\/ritekit.com)
* Credentials: clientId

## How to get credentials: 
0. Sign up for [RiteKit](https:\/\/ritekit.com) 
1. Go to developer [dashboard](https:\/\/ritekit.com\/developer\/dashboard\/)
2. Click `Create a token` button to get your Client ID
 
## RiteKit.getAutoHashtaggedText
Returns auto-hashtagged text of the post.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| text    | String     | Text of the post.Example: `Is artificial intelligence the future of customer service?`.

## RiteKit.getListOfHashtagSuggestions
Returns list of hashtag suggestions and their real-time stats for a given topic.

| Field    | Type       | Description
|----------|------------|----------
| clientId | credentials| Client id from your developer dashboard.
| topicText| String     | Topic text. Example: `seo`.

## RiteKit.getHashtagHistory
Returns historical stats for a given hashtag from the last 30 days.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| hashtag | String     | Hashtag without # mark. Example: `job`.

## RiteKit.getTrendingHashtags
Returns list of hashtags currently trending on Twitter.

| Field              | Type       | Description
|--------------------|------------|----------
| clientId           | credentials| Client id from your developer dashboard.
| onlyGreenHashtags  | Select     | Restrict results only to green hashtags. Hides overused (red) hashtags. Default: true.
| onlyLatinCharacters| Select     | Restrict results only to hashtags with latin characters. Default: true.

## RiteKit.getEmojiSuggestionsForText
Returns list of emoji suggestions for a given text of the post.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| text    | String     | Text of the post. Example:` Why robots may soon steal all manufacturing jobs – but it’s not all bad news`.

## RiteKit.getTextWithEmojiAdded
Returns text of the post with emoji added.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| text    | String     | Text of the post. Example:` Why robots may soon steal all manufacturing jobs – but it’s not all bad news`.

## RiteKit.getInfluencersForHashtag
Returns list of Twitter influencers for a given hashtag.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| hashtag | String     | Hashtag without # mark. Example: `SocialMedia`.

## RiteKit.createImageFromText
Returns URL of an image created from text according to given style parameters.

| Field          | Type       | Description
|----------------|------------|----------
| clientId       | credentials| Client id from your developer dashboard.
| quote          | String     | Text of the quote. Example: `If you love life, don't waste time, for time is what life is made up of`.
| author         | String     | Name of the author/source Example: Bruce Lee.
| fontSize       | Number     | Font size for the quote (author font size is calculated automatically) Example: 60.
| quoteFont      | String     | Font-family used for quote text Example: Lora.
| quoteFontColor | String     | Font color of the quote text Example: #4f4f4f.
| authorFont     | String     | Font-family used for author name Example: Lato Black.
| authorFontColor| String     | Font color of the author Example: #e5e5e5.
| enableHighlight| String     | Enable highlight on quote text Example: 1.
| highlightColor | String     | Color used for highlight Example: #f0ea66.
| bgType         | String     | Background type (gradient/solid) Example: gradient.
| backgroundColor| String     | Background color for solid background type Example: #000000.
| gradientType   | String     | Type of gradient background (linear/radial) Example: linear.
| gradientColor1 | String     | First color for gradient background type Example: #1ee691.
| gradientColor2 | String     | Second color for gradient background type Example: #1ddad6.
| brandLogo      | String     | Second color for gradient background type Example: #1ddad6.

## RiteKit.getLogoImage
Returns a company logo based on website domain.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| domain  | String     | URL of the company. Example: google.com.

## RiteKit.getShortenLink
Returns a shorten link with a given CTA.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.
| cta     | String     | cta id Example: 1.
| url     | String     | URL Example: https://ritekit.com.

## RiteKit.getListOfCTAs
Returns list of available CTA for current user. Requires each user to authenticate with RiteKit.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| Client id from your developer dashboard.

