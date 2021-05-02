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

![php-shields](https://blsonepal.com/shields.php?)
