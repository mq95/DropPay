--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.8
-- Dumped by pg_dump version 9.6.8

-- Started on 2018-04-24 11:59:48 CEST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12429)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2197 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 186 (class 1259 OID 16388)
-- Name: account; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.account (
    id integer NOT NULL,
    username character varying(100),
    firstname character varying(100),
    sur_name character varying(100),
    date_birth character varying(255),
    gender character varying(100),
    type character varying(100),
    partita_iva character varying(100) DEFAULT NULL::character varying,
    categoria_merceologica character varying(100) DEFAULT NULL::character varying,
    codice_ateco character varying(100) DEFAULT NULL::character varying,
    id_document character varying(255) DEFAULT NULL::character varying,
    email character varying(100) DEFAULT NULL::character varying,
    visura character varying(100) DEFAULT NULL::character varying,
    status character varying(100) DEFAULT NULL::character varying,
    selfie character varying(255) DEFAULT NULL::character varying,
    firma character varying(255) DEFAULT NULL::character varying,
    progress integer,
    progressbackoffice text
);


ALTER TABLE public.account OWNER TO postgres;

--
-- TOC entry 2198 (class 0 OID 0)
-- Dependencies: 186
-- Name: COLUMN account.progressbackoffice; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.account.progressbackoffice IS '(DC2Type:array)';


--
-- TOC entry 185 (class 1259 OID 16386)
-- Name: account_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.account_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.account_id_seq OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 16466)
-- Name: app_user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.app_user (
    id integer NOT NULL,
    username character varying(180) NOT NULL,
    username_canonical character varying(180) NOT NULL,
    email character varying(180) NOT NULL,
    email_canonical character varying(180) NOT NULL,
    enabled boolean NOT NULL,
    salt character varying(255) DEFAULT NULL::character varying,
    password character varying(255) NOT NULL,
    last_login timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    confirmation_token character varying(180) DEFAULT NULL::character varying,
    password_requested_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    roles text NOT NULL
);


ALTER TABLE public.app_user OWNER TO postgres;

--
-- TOC entry 2199 (class 0 OID 0)
-- Dependencies: 188
-- Name: COLUMN app_user.roles; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.app_user.roles IS '(DC2Type:array)';


--
-- TOC entry 187 (class 1259 OID 16464)
-- Name: app_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.app_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.app_user_id_seq OWNER TO postgres;

--
-- TOC entry 2187 (class 0 OID 16388)
-- Dependencies: 186
-- Data for Name: account; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.account (id, username, firstname, sur_name, date_birth, gender, type, partita_iva, categoria_merceologica, codice_ateco, id_document, email, visura, status, selfie, firma, progress, progressbackoffice) FROM stdin;
92	user2	U	S	01/01/1999	male	personal	\N	\N	\N	bpmn-def.pdf	prova@p.com	\N	Waiting new selfie	\N	\N	0	\N
94	g55	jacob	bob	12/12/1978	male	personal	\N	\N	\N	bpmn-def.pdf	prova@p.com	\N	Waiting new signature	\N	\N	0	\N
98	ferri	Luke	Ferdinand	11111-07-07	female	personal	\N	\N	\N	pgadmin.log	jjkb@jjjhujhk.cco	\N	Waiting e-mail check	\N	\N	0	\N
103	res	Mary	Redmond	1111-01-01	male	personal	\N	\N	\N	pgadmin.log	p@p.c	\N	Expired Id Docuement	\N	\N	0	\N
104	SocietySpa	Paul	Tres	1111-11-11	male	business	165156156	cars	15153135	pgadmin.log	p@p.c	pgadmin.log	Expired CS Report	\N	\N	0	\N
106	mq95	Malak	Qaisi	1995-07-19	female	personal	\N	\N	\N	6277925d4164b94fc6c57b179ccce475.pdf	malak95@hotmail.it	\N	Waiting AML check	9c0b0af8b814e6fd2493ea2f69e601b7.png	2b059dec6e1762286abb92cb06d933fc.png	0	\N
108	newUser	UserName	UserSurname	1978-04-17	male	personal	\N	\N	\N	bf877cbf0bacd820a309f848f6039dd1.pdf	malak95@hotmail.it	\N	Waiting AML check	69988b09eed4a2bccc664327b7e068fb.png	7bdec2e0b5337e41da62636936975889.svg	75	a:3:{i:0;s:2:"on";i:1;s:2:"on";i:2;s:2:"on";}
91	biz_	biz	biz	1/1/1000	male	business	321351631	meal	641651	bpmn-def.pdf	prova@p.com	bpmn-def.pdf	Waiting AML check	\N	\N	30	a:3:{i:0;s:2:"on";i:1;s:2:"on";i:9;s:2:"on";}
89	user_1	user	user	9999-09-09	male	personal	\N	\N	\N	pgadmin.log	user@user.user	\N	Waiting AML check	\N	\N	0	\N
93	a93	a93	q93	12/12/1978	female	personal	\N	\N	\N	BPMN_poster.pdf	p93@p.com	\N	Waiting new Id Docuement	\N	\N	0	\N
\.


--
-- TOC entry 2200 (class 0 OID 0)
-- Dependencies: 185
-- Name: account_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.account_id_seq', 108, true);


--
-- TOC entry 2189 (class 0 OID 16466)
-- Dependencies: 188
-- Data for Name: app_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.app_user (id, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, confirmation_token, password_requested_at, roles) FROM stdin;
5	admin	admin	malak95@hotmail.it	malak95@hotmail.it	t	\N	$2y$13$uAtHbu1S5n8nmXwlGbVBNegGWvEXYZCUl41Vtm0XuQrEn2qPtf5n6	2018-04-24 11:24:10	\N	\N	a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}
4	test	test	test@example.com	test@example.com	f	\N	$2y$13$hQHd2tjRvvnGXwB0NUQi5OwTDRwNLPVe9B7kLDejcqKjQ46GWe.U6	2018-04-18 14:24:33	\N	\N	a:0:{}
6	back_office	back_office	back_office@gmail.com	back_office@gmail.com	t	\N	$2y$13$rnVVGxEZId7ibp6eoYDskOkYoBu2XKbqJv8m.yTkXqCk7iwnr45uy	2018-04-20 09:19:14	\N	\N	a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}
\.


--
-- TOC entry 2201 (class 0 OID 0)
-- Dependencies: 187
-- Name: app_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.app_user_id_seq', 6, true);


--
-- TOC entry 2063 (class 2606 OID 16395)
-- Name: account account_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.account
    ADD CONSTRAINT account_pkey PRIMARY KEY (id);


--
-- TOC entry 2065 (class 2606 OID 16477)
-- Name: app_user app_user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.app_user
    ADD CONSTRAINT app_user_pkey PRIMARY KEY (id);


--
-- TOC entry 2066 (class 1259 OID 16478)
-- Name: uniq_88bdf3e992fc23a8; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_88bdf3e992fc23a8 ON public.app_user USING btree (username_canonical);


--
-- TOC entry 2067 (class 1259 OID 16479)
-- Name: uniq_88bdf3e9a0d96fbf; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_88bdf3e9a0d96fbf ON public.app_user USING btree (email_canonical);


--
-- TOC entry 2068 (class 1259 OID 16480)
-- Name: uniq_88bdf3e9c05fb297; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_88bdf3e9c05fb297 ON public.app_user USING btree (confirmation_token);


-- Completed on 2018-04-24 11:59:48 CEST

--
-- PostgreSQL database dump complete
--

