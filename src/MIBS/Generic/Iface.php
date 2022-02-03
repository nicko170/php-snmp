<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 *
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 *
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\MIBS\Generic;

use Nicko170\PhpSnmp\MIBS\Base;

class Iface extends Base
{
    const OID_IF_INDEX = '.1.3.6.1.2.1.2.2.1.1';
    const OID_IF_DESCRIPTION = '.1.3.6.1.2.1.2.2.1.2';
    const OID_IF_TYPE = '.1.3.6.1.2.1.2.2.1.3';
    const OID_IF_MTU = '.1.3.6.1.2.1.2.2.1.4';
    const OID_IF_SPEED = '.1.3.6.1.2.1.2.2.1.5';
    const OID_IF_PHYS_ADDRESS = '.1.3.6.1.2.1.2.2.1.6';
    const OID_IF_ADMIN_STATUS = '.1.3.6.1.2.1.2.2.1.7';
    const OID_IF_OPER_STATUS = '.1.3.6.1.2.1.2.2.1.8';

    const OID_IF_NAME = '.1.3.6.1.2.1.31.1.1.1.1';
    const OID_IF_ALIAS = '.1.3.6.1.2.1.31.1.1.1.18';

    const IF_ADMIN_STATUS_UP = 1;
    const IF_ADMIN_STATUS_DOWN = 2;

    const IF_OPER_STATUS_UP = 1;
    const IF_OPER_STATUS_DOWN = 2;
    const IF_OPER_STATUS_TESTING = 3;
    const IF_OPER_STATUS_UNKNOWN = 4;
    const IF_OPER_STATUS_DORMANT = 5;
    const IF_OPER_STATUS_NOT_PRESENT = 6;
    const IF_OPER_STATUS_LOWER_LAYER_DOWN = 7;

    const IF_TYPE_OTHER = 1;
    const IF_TYPE_REGULAR1822 = 2;
    const IF_TYPE_HDH1822 = 3;
    const IF_TYPE_DDNX25 = 4;
    const IF_TYPE_RFC877X25 = 5;
    const IF_TYPE_ETHERNETCSMACD = 6;
    const IF_TYPE_ISO88023CSMACD = 7;
    const IF_TYPE_ISO88024TOKENBUS = 8;
    const IF_TYPE_ISO88025TOKENRING = 9;
    const IF_TYPE_ISO88026MAN = 10;
    const IF_TYPE_STARLAN = 11;
    const IF_TYPE_PROTEON10MBIT = 12;
    const IF_TYPE_PROTEON80MBIT = 13;
    const IF_TYPE_HYPERCHANNEL = 14;
    const IF_TYPE_FDDI = 15;
    const IF_TYPE_LAPB = 16;
    const IF_TYPE_SDLC = 17;
    const IF_TYPE_DS1 = 18;
    const IF_TYPE_E1 = 19;
    const IF_TYPE_BASICISDN = 20;
    const IF_TYPE_PRIMARYISDN = 21;
    const IF_TYPE_PROPPOINTTOPOINTSERIAL = 22;
    const IF_TYPE_PPP = 23;
    const IF_TYPE_SOFTWARELOOPBACK = 24;
    const IF_TYPE_EON = 25;
    const IF_TYPE_ETHERNET3MBIT = 26;
    const IF_TYPE_NSIP = 27;
    const IF_TYPE_SLIP = 28;
    const IF_TYPE_ULTRA = 29;
    const IF_TYPE_DS3 = 30;
    const IF_TYPE_SIP = 31;
    const IF_TYPE_FRAMERELAY = 32;
    const IF_TYPE_RS232 = 33;
    const IF_TYPE_PARA = 34;
    const IF_TYPE_ARCNET = 35;
    const IF_TYPE_ARCNETPLUS = 36;
    const IF_TYPE_ATM = 37;
    const IF_TYPE_MIOX25 = 38;
    const IF_TYPE_SONET = 39;
    const IF_TYPE_X25PLE = 40;
    const IF_TYPE_ISO88022LLC = 41;
    const IF_TYPE_LOCALTALK = 42;
    const IF_TYPE_SMDSDXI = 43;
    const IF_TYPE_FRAMERELAYSERVICE = 44;
    const IF_TYPE_V35 = 45;
    const IF_TYPE_HSSI = 46;
    const IF_TYPE_HIPPI = 47;
    const IF_TYPE_MODEM = 48;
    const IF_TYPE_AAL5 = 49;
    const IF_TYPE_SONETPATH = 50;
    const IF_TYPE_SONETVT = 51;
    const IF_TYPE_SMDSICIP = 52;
    const IF_TYPE_PROPVIRTUAL = 53;
    const IF_TYPE_PROPMULTIPLEXOR = 54;
    const IF_TYPE_IEEE80212 = 55;
    const IF_TYPE_FIBRECHANNEL = 56;
    const IF_TYPE_HIPPIINTERFACE = 57;
    const IF_TYPE_FRAMERELAYINTERCONNECT = 58;
    const IF_TYPE_AFLANE8023 = 59;
    const IF_TYPE_AFLANE8025 = 60;
    const IF_TYPE_CCTEMUL = 61;
    const IF_TYPE_FASTETHER = 62;
    const IF_TYPE_ISDN = 63;
    const IF_TYPE_V11 = 64;
    const IF_TYPE_V36 = 65;
    const IF_TYPE_G703AT64K = 66;
    const IF_TYPE_G703AT2MB = 67;
    const IF_TYPE_QLLC = 68;
    const IF_TYPE_FASTETHERFX = 69;
    const IF_TYPE_CHANNEL = 70;
    const IF_TYPE_IEEE80211 = 71;
    const IF_TYPE_IBM370PARCHAN = 72;
    const IF_TYPE_ESCON = 73;
    const IF_TYPE_DLSW = 74;
    const IF_TYPE_ISDNS = 75;
    const IF_TYPE_ISDNU = 76;
    const IF_TYPE_LAPD = 77;
    const IF_TYPE_IPSWITCH = 78;
    const IF_TYPE_RSRB = 79;
    const IF_TYPE_ATMLOGICAL = 80;
    const IF_TYPE_DS0 = 81;
    const IF_TYPE_DS0BUNDLE = 82;
    const IF_TYPE_BSC = 83;
    const IF_TYPE_ASYNC = 84;
    const IF_TYPE_CNR = 85;
    const IF_TYPE_ISO88025DTR = 86;
    const IF_TYPE_EPLRS = 87;
    const IF_TYPE_ARAP = 88;
    const IF_TYPE_PROPCNLS = 89;
    const IF_TYPE_HOSTPAD = 90;
    const IF_TYPE_TERMPAD = 91;
    const IF_TYPE_FRAMERELAYMPI = 92;
    const IF_TYPE_X213 = 93;
    const IF_TYPE_ADSL = 94;
    const IF_TYPE_RADSL = 95;
    const IF_TYPE_SDSL = 96;
    const IF_TYPE_VDSL = 97;
    const IF_TYPE_ISO88025CRFPINT = 98;
    const IF_TYPE_MYRINET = 99;
    const IF_TYPE_VOICEEM = 100;
    const IF_TYPE_VOICEFXO = 101;
    const IF_TYPE_VOICEFXS = 102;
    const IF_TYPE_VOICEENCAP = 103;
    const IF_TYPE_VOICEOVERIP = 104;
    const IF_TYPE_ATMDXI = 105;
    const IF_TYPE_ATMFUNI = 106;
    const IF_TYPE_ATMIMA = 107;
    const IF_TYPE_PPPMULTILINKBUNDLE = 108;
    const IF_TYPE_IPOVERCDLC = 109;
    const IF_TYPE_IPOVERCLAW = 110;
    const IF_TYPE_STACKTOSTACK = 111;
    const IF_TYPE_VIRTUALIPADDRESS = 112;
    const IF_TYPE_MPC = 113;
    const IF_TYPE_IPOVERATM = 114;
    const IF_TYPE_ISO88025FIBER = 115;
    const IF_TYPE_TDLC = 116;
    const IF_TYPE_GIGABITETHERNET = 117;
    const IF_TYPE_HDLC = 118;
    const IF_TYPE_LAPF = 119;
    const IF_TYPE_V37 = 120;
    const IF_TYPE_X25MLP = 121;
    const IF_TYPE_X25HUNTGROUP = 122;
    const IF_TYPE_TRASNPHDLC = 123;
    const IF_TYPE_INTERLEAVE = 124;
    const IF_TYPE_FAST = 125;
    const IF_TYPE_IP = 126;
    const IF_TYPE_DOCSCABLEMACLAYER = 127;
    const IF_TYPE_DOCSCABLEDOWNSTREAM = 128;
    const IF_TYPE_DOCSCABLEUPSTREAM = 129;
    const IF_TYPE_A12MPPSWITCH = 130;
    const IF_TYPE_TUNNEL = 131;
    const IF_TYPE_COFFEE = 132;
    const IF_TYPE_CES = 133;
    const IF_TYPE_ATMSUBINTERFACE = 134;
    const IF_TYPE_L2VLAN = 135;
    const IF_TYPE_L3IPVLAN = 136;
    const IF_TYPE_L3IPXVLAN = 137;
    const IF_TYPE_DIGITALPOWERLINE = 138;
    const IF_TYPE_MEDIAMAILOVERIP = 139;
    const IF_TYPE_DTM = 140;
    const IF_TYPE_DCN = 141;
    const IF_TYPE_IPFORWARD = 142;
    const IF_TYPE_MSDSL = 143;
    const IF_TYPE_IEEE1394 = 144;
    const IF_TYPE_IF_GSN = 145;
    const IF_TYPE_DVBRCCMACLAYER = 146;
    const IF_TYPE_DVBRCCDOWNSTREAM = 147;
    const IF_TYPE_DVBRCCUPSTREAM = 148;
    const IF_TYPE_ATMVIRTUAL = 149;
    const IF_TYPE_MPLSTUNNEL = 150;
    const IF_TYPE_SRP = 151;
    const IF_TYPE_VOICEOVERATM = 152;
    const IF_TYPE_VOICEOVERFRAMERELAY = 153;
    const IF_TYPE_IDSL = 154;
    const IF_TYPE_COMPOSITELINK = 155;
    const IF_TYPE_SS7SIGLINK = 156;
    const IF_TYPE_PROPWIRELESSP2P = 157;
    const IF_TYPE_FRFORWARD = 158;
    const IF_TYPE_RFC1483 = 159;
    const IF_TYPE_USB = 160;
    const IF_TYPE_IEEE8023ADLAG = 161;
    const IF_TYPE_BGPPOLICYACCOUNTING = 162;
    const IF_TYPE_FRF16MFRBUNDLE = 163;
    const IF_TYPE_H323GATEKEEPER = 164;
    const IF_TYPE_H323PROXY = 165;
    const IF_TYPE_MPLS = 166;
    const IF_TYPE_MFSIGLINK = 167;
    const IF_TYPE_HDSL2 = 168;
    const IF_TYPE_SHDSL = 169;
    const IF_TYPE_DS1FDL = 170;
    const IF_TYPE_POS = 171;
    const IF_TYPE_DVBASIIN = 172;
    const IF_TYPE_DVBASIOUT = 173;
    const IF_TYPE_PLC = 174;
    const IF_TYPE_NFAS = 175;
    const IF_TYPE_TR008 = 176;
    const IF_TYPE_GR303RDT = 177;
    const IF_TYPE_GR303IDT = 178;
    const IF_TYPE_ISUP = 179;
    const IF_TYPE_PROPDOCSWIRELESSMACLAYER = 180;
    const IF_TYPE_PROPDOCSWIRELESSDOWNSTREAM = 181;
    const IF_TYPE_PROPDOCSWIRELESSUPSTREAM = 182;
    const IF_TYPE_HIPERLAN2 = 183;
    const IF_TYPE_PROPBWAP2MP = 184;
    const IF_TYPE_SONETOVERHEADCHANNEL = 185;
    const IF_TYPE_DIGITALWRAPPEROVERHEADCHANNEL = 186;
    const IF_TYPE_AAL2 = 187;
    const IF_TYPE_RADIOMAC = 188;
    const IF_TYPE_ATMRADIO = 189;
    const IF_TYPE_IMT = 190;
    const IF_TYPE_MVL = 191;
    const IF_TYPE_REACHDSL = 192;
    const IF_TYPE_FRDLCIENDPT = 193;
    const IF_TYPE_ATMVCIENDPT = 194;
    const IF_TYPE_OPTICALCHANNEL = 195;
    const IF_TYPE_OPTICALTRANSPORT = 196;
    const IF_TYPE_PROPATM = 197;
    const IF_TYPE_VOICEOVERCABLE = 198;
    const IF_TYPE_INFINIBAND = 199;
    const IF_TYPE_TELINK = 200;
    const IF_TYPE_Q2931 = 201;
    const IF_TYPE_VIRTUALTG = 202;
    const IF_TYPE_SIPTG = 203;
    const IF_TYPE_SIPSIG = 204;
    const IF_TYPE_DOCSCABLEUPSTREAMCHANNEL = 205;
    const IF_TYPE_ECONET = 206;
    const IF_TYPE_PON155 = 207;
    const IF_TYPE_PON622 = 208;
    const IF_TYPE_BRIDGE = 209;
    const IF_TYPE_LINEGROUP = 210;
    const IF_TYPE_VOICEEMFGD = 211;
    const IF_TYPE_VOICEFGDEANA = 212;
    const IF_TYPE_VOICEDID = 213;
    const IF_TYPE_MPEGTRANSPORT = 214;
    const IF_TYPE_SIXTOFOUR = 215;
    const IF_TYPE_GTP = 216;
    const IF_TYPE_PDNETHERLOOP1 = 217;
    const IF_TYPE_PDNETHERLOOP2 = 218;
    const IF_TYPE_OPTICALCHANNELGROUP = 219;
    const IF_TYPE_HOMEPNA = 220;
    const IF_TYPE_GFP = 221;
    const IF_TYPE_CISCOISLVLAN = 222;
    const IF_TYPE_ACTELISMETALOOP = 223;
    const IF_TYPE_FCIPLINK = 224;
    const IF_TYPE_RPR = 225;
    const IF_TYPE_QAM = 226;
    const IF_TYPE_LMP = 227;
    const IF_TYPE_CBLVECTASTAR = 228;
    const IF_TYPE_DOCSCABLEMCMTSDOWNSTREAM = 229;
    const IF_TYPE_ADSL2 = 230;
    const IF_TYPE_MACSECCONTROLLEDIF = 231;
    const IF_TYPE_MACSECUNCONTROLLEDIF = 232;
    const IF_TYPE_AVICIOPTICALETHER = 233;
    const IF_TYPE_ATMBOND = 234;

    /**
     * Text representation of interface operating status.
     *
     * @see operationStates()
     *
     * @var array Text representations of interface operating status.
     */
    public function indexes(): array|false
    {
        return $this->snmp->walk(self::OID_IF_INDEX);
    }

    public function descriptions(): array|false
    {
        return $this->snmp->walk(self::OID_IF_DESCRIPTION);
    }

    public function types(): array|false
    {
        return $this->snmp->walk(self::OID_IF_TYPE);
    }

    public function mtus(): array|false
    {
        return $this->snmp->walk(self::OID_IF_MTU);
    }

    public function speeds(): array|false
    {
        return $this->snmp->walk(self::OID_IF_SPEED);
    }

    public function physAddresses(): array|false
    {
        return $this->snmp->walk(self::OID_IF_PHYS_ADDRESS);
    }

    public function admins(): array|false
    {
        return $this->snmp->walk(self::OID_IF_ADMIN_STATUS);
    }

    public function opers(): array|false
    {
        return $this->snmp->walk(self::OID_IF_OPER_STATUS);
    }

    public function names(): array|false
    {
        return $this->snmp->walk(self::OID_IF_NAME);
    }

    public function aliases(): array|false
    {
        return $this->snmp->walk(self::OID_IF_ALIAS);
    }

    /**
     * @return array<\Nicko170\PhpSnmp\Models\Iface>
     */
    public function all(): array
    {
        return array_map(
            fn (int $index) => (new \Nicko170\PhpSnmp\Models\Iface($index))
                ->description($this->descriptions()[self::OID_IF_DESCRIPTION.'.'.$index])
                ->type($this->types()[self::OID_IF_TYPE.'.'.$index])
                ->mtu($this->mtus()[self::OID_IF_MTU.'.'.$index])
                ->speed($this->speeds()[self::OID_IF_SPEED.'.'.$index])
                ->physAddress($this->physAddresses()[self::OID_IF_PHYS_ADDRESS.'.'.$index])
                ->admin($this->admins()[self::OID_IF_ADMIN_STATUS.'.'.$index])
                ->oper($this->opers()[self::OID_IF_OPER_STATUS.'.'.$index])
                ->name($this->names()[self::OID_IF_NAME.'.'.$index])
                ->alias($this->aliases()[self::OID_IF_ALIAS.'.'.$index]),

            array_values($this->indexes())
        );
    }
}
