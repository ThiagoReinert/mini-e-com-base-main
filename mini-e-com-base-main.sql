PGDMP     +                    z            Mercado    13.2    13.2     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    24837    Mercado    DATABASE     i   CREATE DATABASE "Mercado" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE "Mercado";
                postgres    false            ?            1259    24850 	   tbproduto    TABLE     ?   CREATE TABLE public.tbproduto (
    procodigo integer NOT NULL,
    pronome character varying(15) NOT NULL,
    propreco numeric(10,2) NOT NULL,
    prodescricao character varying(15) NOT NULL
);
    DROP TABLE public.tbproduto;
       public         heap    postgres    false            ?            1259    24848    tbproduto_procodigo_seq    SEQUENCE     ?   CREATE SEQUENCE public.tbproduto_procodigo_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.tbproduto_procodigo_seq;
       public          postgres    false    201            ?           0    0    tbproduto_procodigo_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.tbproduto_procodigo_seq OWNED BY public.tbproduto.procodigo;
          public          postgres    false    200            "           2604    24853    tbproduto procodigo    DEFAULT     z   ALTER TABLE ONLY public.tbproduto ALTER COLUMN procodigo SET DEFAULT nextval('public.tbproduto_procodigo_seq'::regclass);
 B   ALTER TABLE public.tbproduto ALTER COLUMN procodigo DROP DEFAULT;
       public          postgres    false    200    201    201            ?          0    24850 	   tbproduto 
   TABLE DATA           O   COPY public.tbproduto (procodigo, pronome, propreco, prodescricao) FROM stdin;
    public          postgres    false    201   9       ?           0    0    tbproduto_procodigo_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.tbproduto_procodigo_seq', 9, true);
          public          postgres    false    200            $           2606    24855    tbproduto tbproduto_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.tbproduto
    ADD CONSTRAINT tbproduto_pkey PRIMARY KEY (procodigo);
 B   ALTER TABLE ONLY public.tbproduto DROP CONSTRAINT tbproduto_pkey;
       public            postgres    false    201            ?   3   x?3?(?O)-?Wp?44?30?t???2??:q?E]+RsR?JR?b???? ??4     