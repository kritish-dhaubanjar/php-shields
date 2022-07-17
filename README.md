## PHP SHIELDS

Create and host your own simple service for badges in SVG, with ease to include in GitHub readmes. 

Inspired from **Shields.io**.

**SVG** created from **Inkscape**.

## WHY php-shields?
I tried to use shields.io, but for calculated numbers from apis that you don't own such as firebase, you can implement you own custom logic to display the numbers.

#### Example

`GET https://vyaguta-extension-default-rtdb.firebaseio.com/requests.json`


```
  "-MXx4mx57rVqddijgDiA": {
    "at": "Sun Apr 11 2021 00:26:56 GMT+0545 (Nepal Time)"
  },
  "-MXx4tfeUcwjrpZ7vw-v": {
    "at": "Sun Apr 11 2021 00:27:23 GMT+0545 (Nepal Time)"
  },
  "-MXx5Fpb68YSO475nAIK": {
    "at": "Sun Apr 11 2021 00:28:58 GMT+0545 (Nepal Time)"
  },
  ...
```

Here, I need the total count of the keys, but I'm unable to do so, and shields.io doesn't offer a computation over the api response, hence **php-shields**.

#### Usage

```
<img src="/shield.php"/>
```

![php-shields](https://myunepal.com/shields.php?)

#### Read More
https://docs.github.com/en/github/authenticating-to-github/about-anonymized-image-urls

https://github.com/amio/embedded-google-fonts

```
<style type="text/css">
  /* cyrillic-ext */
  @font-face {
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 400;
    src: url(data:font/woff2;base64,d09GMgABAAAAAEEYABIAAAAAkAgAAECyAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGoFOG5JCHDYGYACCWAhSCYM8EQwKge1MgdV4C4NaABKBeAE2AiQDhzAEIAWDCgcgDIJEGx+BJezYSwEbBwDm3U474I7BxuEYxnhzJELYOHCGhlXB/39ObsBQsB1Qq9YHlVIpOEkhdAaNXiEIOpATi07k6uHdW4+K+fLSW29Xdinflf+DoeC0WNDznlm0TA+1p/hB9VfTpt4jLq/KR+YvZ3hfig7dqnNInzmnGpXWx1b1T2VDuCC8tzQPmTotiGLZazIG54iFpssIBcaU4TOwbeRPcvLy0LvGvzfJTLaAqIgVsQYGh6CA7W8VsO3x5KrYVuNrd4bn1+Z7//+rIOqI
  ...
</style>
