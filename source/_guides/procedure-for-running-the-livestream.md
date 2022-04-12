---
extends: _layouts.guide
title: Procedure for running the Livestream
date: 2022-01-07
---

## Pre-Service Preparation {#pre-service-preparation}

### OBS {#obs}

1. Scene = “Livestream”
2. Audio from Blackmagic Device unmuted
3. Settings > Stream key set to Vimeo’s event key

### ATEM Video Switcher {#atem-video-switcher}

1. Set Program to PP (ProPresenter), Preview to CAM1
2. Center-cam: auto-focus, centered on pulpit
3. Side-cam: wide-view of band

### Church Online (riverstone.live) {#church-online}

1. Set service to 2:20 length, start chat/video 15min before, allow chat 15min after
2. Set Video Source / Embed Code to Vimeo Live event > Embed > “Event embed code”

## Pre-Service Countdown (T-15min) {#pre-service-countdown}

1. In ProPresenter, start the Pre-Service slideshow and start the countdown message (You will need to set the time service starts).
2. In OBS, click “Start Recording” and then click “Start Streaming”
3. In OBS, start the “Intro BG Music” source
4. Confirm the stream health is good on Vimeo
5. Confirm stream is showing on riverstone.live
6. Confirm live event has started on Facebook

## Service {#service}

### When Service Starts {#when-service-stars}

1. Set Program to CAM1, Preview to CAM2
2. Tell Lyrics operator to show “ON-AIR” message
3. OBS: transition from BG Music to Blackmagic capture

### During Giving: {#during-giving}

1. Show Giving Slide from PP or in OBS

### Scripture Reading: {#scripture-reading}

1. Transition ATEM from CAM to PP
2. As soon as the scripture has been read switch back to on of the cameras immediately.

## End of service: {#end-of-service}

1. Show “Goodbye Still” slide for\~20s
2. Fade audio to mute on “Blackmagic Device”
3. End Vimeo Event
4. Tell Lyrics operator to show “OFF-AIR” message
5. In OBS, click “Stop Streaming” and then click “Stop Recording”
6. Power down the livestream equipment
