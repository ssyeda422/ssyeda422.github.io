---
date: 2021-12-10 00:00:00
title: Improving Fastly's HTTP Load Testing Tools

tags:
  - MQP
  - HTTP Load Testing
image: /uploads/load-testing-graphic-e1549398083683.png
---
My senior capstone was a fourteen-week long project working with a Silicon Valley company partnered with WPI. As a team of three, we worked with the CDN company Fastly to develop an improved load testing tool to suit their needs and replicate specific scenarios with issues they were facing in production.

As part of our project, we extended an open-source load testing tool K6 to include a force HTTP/1 feature, which we were eventually able to merge into the official project\! This was definitely valuable getting to see the entire approval process and what is generally required for complex tools like these.

![](/uploads/screenshot-2021-12-17-213636.png){: width="883" height="511"}

After finding K6, we also integrated new programs/features into a Fastly-specific wrapper program to address different limitations of their old load-testing tool - for example, generating TLS handshakes with the tool TLS-Perf, and creating secure connections to remote hosts via bastions.

One job I focused on was writing a program to generate load against Fastly’s target server via idle TCP connections. There were various aspects of this task that were previously unfamiliar to me - using GoLang for the first time, its vast package library (particularly the network I/O package), and concurrency with goroutines.

![](/uploads/screenshot-2021-12-17-215737.png){: width="1318" height="748"}

Although working through these issues involved a slight learning curve at first, I&nbsp;got a lot of guidance and advise from our Fastly mentors, and by the end I definitely felt I had a solid grasp of the program\! I also got additional experience from problems that were uncovered in the process - for example, when we faced an issue with insufficient file descriptors, I had the opportunity to learn about the whole concept of ephemeral ports and accessing network interfaces, which I didn't know much about previously.

At the end of the project, our project sponsor helped us actually test the program against Fastly's servers to replicate those original production scenarios, and we got to see some really interesting output via Grafana network dashboards as seen below. It was really cool to see our work get integrated into Fastly’s software stack and prove useful for them in replicating various production scenarios\!

![](/uploads/screenshot-2021-12-17-214434-1.png){: width="1195" height="613"}
