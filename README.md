# OWASP Top 10 Web Application Security Assessment Lab

This repository contains the actionable proof-of-concept exploits and structural defense configurations engineered during the web application security assessment lab using DVWA (Damn Vulnerable Web Application) on Kali Linux.

## Repository Structure
- `/exploits`: Contains specific payloads, parameter injection strings, and proof-of-concept code targeting common web application vulnerability classes.
- `/mitigations`: Outlines secure backend coding practices, parameterized code samples, and server hardening configurations required to eliminate the identified security gaps.

## Lab Execution Summary
1. **Lab Environment Provisioning:** Configured native Apache/MariaDB stack on Kali Linux using a dedicated database account (`dvwa_user`).
2. **Exploitation Framework Execution:** Injection mapping via UNION extraction, stored/reflected XSS verification, ambient session exploitation (CSRF), and arbitrary directory file parsing via Local/Remote File Inclusion vectors.
3. **Automated Boundary Analysis:** Automated credential fuzzing utilizing intercepting proxy components (Burp Intruder) to map response deviations and isolate authentication bypass anomalies.
4. **Server Infrastructure Hardening:** Header modification rule implementation within the Apache service layer to defend against UI redressing, MIME sniffing, and cross-site execution.
