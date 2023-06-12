<style>
    .banner-mading {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
    }

    .wave {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 30%;
        opacity: 0.8;
        z-index: -1;
    }

    .wave2 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30%;
        opacity: 0.5;
        z-index: -1;
    }

    .bg {
        background-size: cover;
        background-position: center;
        height: 450px;
        width: 100%;
        filter: brightness(0.2);
        z-index: -2;
    }
    .banner-tittle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%);
        color: #fff;
        padding: 10px 20px;
        text-align: center;

    }

    .banner-tittle H1 {

        text-align: center;
        font-family: 'THE_JACATRA';
        font-size: 42pt;
        margin-bottom: 20px;
    }

    .banner-tittle p {

        text-align: center;
        margin-bottom: 25px;
    }
</style>