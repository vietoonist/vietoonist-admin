# Vietoonist Admin - Backend

The backend source code for Vietoonist.

## Routes

Will be divided into three groups:
- `Public`: For public endpoints that anybody can access.
- `Authentication`: For endpoints that need to be authenticated or might involve authentication.
- `CMS`: For Comic-Management-System... The admin side.

### Public Controller

Routes & Controllers that are used for public access on the frontend. All the pages that anybody can view will be configured under this file.

### Auth Controller

Routes & Controllers that are used to authenticate a users or required for authentication, for example: `/signup`, `/signin`, `/lost-password`, `/reset-password`, etc.

### CMS

Is the abbreviation for **C**omic **M**anagement **S**ystem. In general, all routes that need for dashboard will be configured under this page.