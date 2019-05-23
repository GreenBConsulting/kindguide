<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class KindGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {

	DB::table('SL_Databases')->insert([
			'DbID' => 1,
			'DbUser' => '1',
			'DbPrefix' => 'KG_',
			'DbName' => 'KindGuide',
			'DbDesc' => 'The Kind Guide',
			'DbTables' => '30',
			'DbFields' => '267'
		]);
	
	DB::table('SL_Tables')->insert([
			'TblID' => 32,
			'TblDatabase' => '1',
			'TblAbbr' => 'ExtCon',
			'TblName' => 'ExternConvert',
			'TblEng' => 'Externality Conversions',
			'TblDesc' => 'Each record converts a specific unit of a specific cost to various metrics for comparable externalities.',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '25',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 33,
			'TblDatabase' => '1',
			'TblAbbr' => 'Tag',
			'TblName' => 'Tags',
			'TblEng' => 'Log Item Tags',
			'TblDesc' => 'Each record is a Tag applied by the User to a specific Audit Log Item. This is important for flexible filtering, sorting, and other data organization.',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '22',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 35,
			'TblDatabase' => '1',
			'TblAbbr' => 'Unit',
			'TblName' => 'Units',
			'TblEng' => 'Externality Units',
			'TblDesc' => 'Each record is one Unit of Measurement which can be used to described a specific Externality Type.',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '26',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 38,
			'TblDatabase' => '1',
			'TblAbbr' => 'It',
			'TblName' => 'Items',
			'TblEng' => 'Audit Log Items',
			'TblDesc' => 'Each record is one Audit Log Item which has an environmental impact, specified in one or more Externality records.',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '21',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 39,
			'TblDatabase' => '1',
			'TblAbbr' => 'Book',
			'TblName' => 'Book',
			'TblEng' => 'Audit',
			'TblDesc' => 'Represents a specific, overarching collection of audit log items. This is important for allowing a single system user to organize separate projects or aspects of their lives.',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '20',
			'TblNumFields' => '8',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 40,
			'TblDatabase' => '1',
			'TblAbbr' => 'ExtTyp',
			'TblName' => 'ExternTypes',
			'TblEng' => 'Externality Types',
			'TblDesc' => 'Each record provides specifications for a single type of externality.',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '24',
			'TblNumFields' => '5',
			'TblNumForeignIn' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 41,
			'TblDatabase' => '1',
			'TblAbbr' => 'Extern',
			'TblName' => 'Externalities',
			'TblEng' => 'Log Item Externalities',
			'TblDesc' => 'Each record stores the quantity of a specific Externality Type associated with a specific Audit Log Item. ',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '23',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 42,
			'TblDatabase' => '1',
			'TblAbbr' => 'UnitCon',
			'TblName' => 'UnitsConvert',
			'TblEng' => 'Externality Unit Conversions',
			'TblDesc' => 'Each record converts between two related Units of Measurement within a given Externality Type. ',
			'TblGroup' => 'Audit Items',
			'TblOrd' => '27',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 43,
			'TblDatabase' => '1',
			'TblAbbr' => 'User',
			'TblName' => 'Users',
			'TblEng' => 'Users',
			'TblDesc' => 'Includes standardized login information and records for all types of system participants.',
			'TblNotes' => 'Actually generated and controlled by Laravel.',
			'TblGroup' => 'Internal',
			'TblOrd' => '28',
			'TblNumFields' => '1',
			'TblNumForeignIn' => '5'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 44,
			'TblDatabase' => '1',
			'TblAbbr' => 'Bus',
			'TblName' => 'Business',
			'TblEng' => 'Business',
			'TblDesc' => 'Represents a specific business or organization, and tracks public information about it.',
			'TblGroup' => 'The Kind Life Database',
			'TblNumFields' => '46',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '8'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 45,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusSect',
			'TblName' => 'BusinessSectors',
			'TblEng' => 'Business Sector Links',
			'TblDesc' => 'Each record tags a business as working within an industry sector. This is important for associating multiple sectors with a business or organization.',
			'TblType' => 'Linking',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '1',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 46,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusTag',
			'TblName' => 'BusinessTags',
			'TblEng' => 'Business Tags',
			'TblDesc' => 'Each record is a Tag which can be applied to one or more Businesses.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '8',
			'TblNumFields' => '2',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 47,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusTagLnk',
			'TblName' => 'BusinessTagLinks',
			'TblEng' => 'Business Tag Links',
			'TblDesc' => 'Stores linkages between Businesses and Business Tags so that many can be related to many.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '7',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 48,
			'TblDatabase' => '1',
			'TblAbbr' => 'Con',
			'TblName' => 'ConsumerSurvey',
			'TblEng' => 'Consumer and Patient Survey',
			'TblDesc' => 'This survey is anonymous. Share it far and wide, and help us #KeepItGreen!',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '10',
			'TblNumFields' => '122',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '9'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 49,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConPurch',
			'TblName' => 'ConsumerPurchase',
			'TblEng' => 'Consumer Survey Purchases',
			'TblDesc' => 'Associate multiple types of purchases to a Consumer Survey response.',
			'TblType' => 'Linking',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '13',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 50,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConIsu',
			'TblName' => 'ConsumerIssues',
			'TblEng' => 'Consumer Issues Matter',
			'TblDesc' => 'Associate multiple types of sustainability issues that matter to a Consumer.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '14',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 51,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConUse',
			'TblName' => 'ConsumerUse',
			'TblEng' => 'Consumer Use',
			'TblDesc' => 'Associate multiple types of use to a Consumer Survey response.',
			'TblType' => 'Linking',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '11',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 52,
			'TblDatabase' => '1',
			'TblAbbr' => 'ComAcc',
			'TblName' => 'ConsumerAccess',
			'TblEng' => 'Consumer Access Methods',
			'TblDesc' => 'Associate multiple methods of cannabis access to a Consumer Survey response.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '12',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 53,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusStat',
			'TblName' => 'BusinessStates',
			'TblEng' => 'Business States',
			'TblDesc' => 'Associates multiple states in which the business operates.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '2',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 54,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusCsr',
			'TblName' => 'BusinessCSR',
			'TblEng' => 'Business CSR Practices',
			'TblDesc' => 'Associates one or more CSR practices with the business.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 55,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusCsrNot',
			'TblName' => 'BusinessNotCSR',
			'TblEng' => 'Business Why Not CSR',
			'TblDesc' => 'Associates one or more reasons why this business does not currently have an ongoing CSR program.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '4',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 56,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusEs',
			'TblName' => 'BusinessES',
			'TblEng' => 'Business ES Practices',
			'TblDesc' => 'Associates one or more Environmental Sustainability practices with a business.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '5',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 57,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusEsNot',
			'TblName' => 'BusinessNotES',
			'TblEng' => 'Business Why Not ES',
			'TblDesc' => 'Associates one or more reasons why this business does not currently have an ongoing ES practice.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '6',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 58,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConRols',
			'TblName' => 'ConsumerRoles',
			'TblEng' => 'Consumer Industry Roles',
			'TblDesc' => 'Associate multiple types of industry roles to a Consumer Survey response.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '15',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 59,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConSect',
			'TblName' => 'ConsumerSectors',
			'TblEng' => 'Consumer Industry Sector',
			'TblDesc' => 'Associate multiple types of industry sectors to a Consumer Survey response.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '16',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 60,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConAdv',
			'TblName' => 'ConsumerAdvocates',
			'TblEng' => 'Consumer Recognize Advocates',
			'TblDesc' => 'Associate multiple recognized marijuana advocates to a Consumer Survey response.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '18',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 61,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConBrn',
			'TblName' => 'ConsumerBrand',
			'TblEng' => 'Consumer How Brand Familiarize',
			'TblDesc' => 'Associate multiple methods to familiarize with cannabis brands to a Consumer Survey response.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '19',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 62,
			'TblDatabase' => '1',
			'TblAbbr' => 'ConCert',
			'TblName' => 'ConsumerCertifications',
			'TblEng' => 'Consumer Recognize Certifications',
			'TblDesc' => 'Associate multiple types of recognized certifications to a Consumer Survey response.',
			'TblGroup' => 'Consumer and Patient Survey',
			'TblOrd' => '17',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 63,
			'TblDatabase' => '1',
			'TblAbbr' => 'BusInv',
			'TblName' => 'BusinessInvites',
			'TblEng' => 'Business Invites',
			'TblDesc' => 'Each record represents one invite from a user (volunteer) to one business.',
			'TblGroup' => 'The Kind Life Database',
			'TblOrd' => '9',
			'TblNumFields' => '13',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 64,
			'TblDatabase' => '1',
			'TblAbbr' => 'Non',
			'TblName' => 'Nonprofit',
			'TblEng' => 'Nonprofit',
			'TblDesc' => 'Represents a specific nonprofit organization, and tracks public information about it.',
			'TblGroup' => 'The Kind Life Database',
			'TblNumFields' => '12',
			'TblNumForeignKeys' => '1'
		]);
	
	DB::table('SL_Fields')->insert([
			'FldID' => 206,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldName' => 'TypeName',
			'FldEng' => 'Externality Type Name',
			'FldDesc' => 'The common name for this type of externality.',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 207,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '3',
			'FldName' => 'HasCarbon',
			'FldEng' => 'Has Carbon Impact',
			'FldDesc' => 'This indicates whether or not type this type externality includes a <i><b>direct</b></i> source or sink of carbon. This does not include general energy usage which may have been provided from a variety of energy sources.',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 208,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '1',
			'FldName' => 'HasWatts',
			'FldEng' => 'Has Energy Usage Measurable in Watts',
			'FldDesc' => 'This indicates whether or not type this type externality includes a <i><b>direct</b></i> source or sink of energy which is measurable in Watts.',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 209,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '4',
			'FldName' => 'HasGreenhouse',
			'FldEng' => 'Has Other Greenhouse Impact',
			'FldDesc' => 'This indicates whether or not type this type externality includes a <i><b>direct</b></i> source or sink of greenhouse gases other than carbon.',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 210,
			'FldDatabase' => '1',
			'FldTable' => '38',
			'FldOrd' => '1',
			'FldName' => 'ItemType',
			'FldEng' => 'Log Item Type',
			'FldDesc' => 'Indicates the general type of Log Item entry of this record.',
			'FldValues' => 'Def::Log Entry Type',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 211,
			'FldDatabase' => '1',
			'FldTable' => '38',
			'FldName' => 'BookID',
			'FldEng' => 'Log Book ID',
			'FldDesc' => 'Indicates the ID of the parent collection of Log Items... a specific Audit Book!',
			'FldForeignTable' => '39',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 212,
			'FldDatabase' => '1',
			'FldTable' => '32',
			'FldName' => 'Type1',
			'FldEng' => 'Externality Type 1',
			'FldDesc' => 'Indicates the first Externality Type being compared and translated with this record.',
			'FldForeignTable' => '40',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 213,
			'FldDatabase' => '1',
			'FldTable' => '32',
			'FldOrd' => '1',
			'FldName' => 'Type2',
			'FldEng' => 'Externality Type 2',
			'FldDesc' => 'Indicates the second Externality Type being compared and translated with this record.',
			'FldForeignTable' => '40',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 214,
			'FldDatabase' => '1',
			'FldTable' => '32',
			'FldOrd' => '3',
			'FldName' => 'Type2Measure',
			'FldEng' => 'Type 2 Coversion Measurement',
			'FldDesc' => 'Indicates the quantity of the second Externality Type, measured in the default Units for the second Type, which are equivalent to the quantity of the first Externality Type.',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 215,
			'FldDatabase' => '1',
			'FldTable' => '32',
			'FldOrd' => '2',
			'FldName' => 'Type1Measure',
			'FldEng' => 'Type 1 Coversion Measurement',
			'FldDesc' => 'Indicates the quantity of the first Externality Type, measured in the default Units for the first Type, which are equivalent to the quantity of the second Externality Type.',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 216,
			'FldDatabase' => '1',
			'FldTable' => '41',
			'FldName' => 'ItemID',
			'FldEng' => 'Audit Log Item ID',
			'FldDesc' => 'The unique number of the Audit Log Item record related to this documented Externality. This number allows us to associate many Externalities with the same Log Item.',
			'FldForeignTable' => '38',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 217,
			'FldDatabase' => '1',
			'FldTable' => '41',
			'FldOrd' => '1',
			'FldName' => 'Type',
			'FldEng' => 'Externality Type',
			'FldDesc' => 'Indicates the specific Externality Type documented in this record.',
			'FldForeignTable' => '40',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 218,
			'FldDatabase' => '1',
			'FldTable' => '41',
			'FldOrd' => '3',
			'FldName' => 'Unit',
			'FldEng' => 'Externality Unit',
			'FldDesc' => 'Indicates the Externality Units used by the User to document this specific Externality for this Audit Log Item.',
			'FldForeignTable' => '35',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 219,
			'FldDatabase' => '1',
			'FldTable' => '41',
			'FldOrd' => '2',
			'FldName' => 'Measure',
			'FldEng' => 'Externality Measurement',
			'FldDesc' => 'Indicated the reported measurement of this specific Log Item\'s Externality, converted to the default units for the this Externality Type.',
			'FldType' => 'DOUBLE',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 220,
			'FldDatabase' => '1',
			'FldTable' => '35',
			'FldOrd' => '2',
			'FldName' => 'Name',
			'FldEng' => 'Unit Name',
			'FldDesc' => 'Indicates the common name or abbreviation given to this Unit of Measurement.',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 221,
			'FldDatabase' => '1',
			'FldTable' => '35',
			'FldName' => 'ExternType',
			'FldEng' => 'Externality Type ID',
			'FldDesc' => 'The unique number of the Externality Type which this Unit of Measure can be applied to.',
			'FldForeignTable' => '40',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 222,
			'FldDatabase' => '1',
			'FldTable' => '33',
			'FldName' => 'ItemID',
			'FldEng' => 'Audit Log Item ID',
			'FldDesc' => 'The unique number of the Audit Log Item being Tagged with this record.',
			'FldForeignTable' => '38',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 223,
			'FldDatabase' => '1',
			'FldTable' => '33',
			'FldOrd' => '1',
			'FldName' => 'Type',
			'FldEng' => 'Item Tag Type',
			'FldDesc' => 'Indicates this record\'s type of Tag, useful in distinguishing between some custom behavior for standardized Tag Types.',
			'FldValues' => 'Def::Tag Types',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 224,
			'FldDatabase' => '1',
			'FldTable' => '33',
			'FldOrd' => '2',
			'FldName' => 'Name',
			'FldEng' => 'Tag Name',
			'FldDesc' => 'Indicates the Tag itself, the label being applied to this record\'s related Audit Log Item.',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 225,
			'FldDatabase' => '1',
			'FldTable' => '35',
			'FldOrd' => '1',
			'FldName' => 'IsDefault',
			'FldEng' => 'Unit Type is the Externality Type\'s default',
			'FldDesc' => 'Indicates whether or not the Unit described in this record is the default Unit of Measurement for its Externality Type.',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 226,
			'FldDatabase' => '1',
			'FldTable' => '42',
			'FldName' => 'Type2Measure',
			'FldEng' => 'Type 2 Coversion Measurement',
			'FldDesc' => 'Indicates the quantity of the second Unit of Measure which are equal to (1) in the Default Unit of Measurement within the related Externality Type.',
			'FldType' => 'DOUBLE',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 227,
			'FldDatabase' => '1',
			'FldTable' => '42',
			'FldOrd' => '1',
			'FldName' => 'Type2',
			'FldEng' => 'Unit of Measurement Type 2',
			'FldDesc' => 'Indicates the second Unit of Measurement being compared and translated with this record.',
			'FldForeignTable' => '35',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 228,
			'FldDatabase' => '1',
			'FldTable' => '43',
			'FldName' => 'Name',
			'FldEng' => 'Username',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 229,
			'FldDatabase' => '1',
			'FldTable' => '38',
			'FldOrd' => '2',
			'FldName' => 'Name',
			'FldEng' => 'Item Name',
			'FldDesc' => 'Indicates a common name for this record which can help identify or organize it, in addition to any other Tags used.',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 230,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '2',
			'FldName' => 'HasBTUs',
			'FldEng' => 'Has Energy Usage in Measuable BTUs',
			'FldDesc' => 'This indicates whether or not type this type externality includes a <i><b>direct</b></i> source or sink of energy which is measurable in BTUs (British Thermal Units).',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldKeyType' => ',',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 231,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Book Name',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 232,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Name',
			'FldDesc' => 'Indicates the name of the business or organization stored in this record.',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 233,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'State',
			'FldEng' => 'Primary State',
			'FldDesc' => 'Indicates the U.S. state where the business or organization is based.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 235,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'ESG',
			'FldEng' => 'ESG Status',
			'FldDesc' => 'Indicates the ESG Status of this business or organization.',
			'FldValues' => 'Def::Business ESG Status',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 236,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Organic',
			'FldEng' => 'Organic',
			'FldDesc' => 'Indicates whether or not the business is certified organic.',
			'FldValues' => 'Y;N;?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 237,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'FairTrade',
			'FldEng' => 'Fair Trade',
			'FldDesc' => 'Indicates whether or not this business is fair trade certified.',
			'FldValues' => 'Y;N;?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 238,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being associated with a sector in this row.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataLength' => '0',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 239,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Sector',
			'FldEng' => 'Sector',
			'FldDesc' => 'Indicates which sector is being associated with the Business in this row.',
			'FldValues' => 'Def::Business Industry Sector',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 240,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Name',
			'FldDesc' => 'Indicates the name of this Business Tag.',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 241,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Description',
			'FldDesc' => 'Indicates a more detailed description of this record\'s Business Tag.',
			'FldType' => 'TEXT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 242,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates the unique ID of the Business associated with a Tag in this record.',
			'FldForeignTable' => '44',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 243,
			'FldDatabase' => '1',
			'FldTable' => '47',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'TagID',
			'FldEng' => 'Business Tag ID',
			'FldDesc' => 'Indicates the unique ID of the Business Tag associated with a Business in this record.',
			'FldForeignTable' => '46',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 244,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'AreYouConsumer',
			'FldEng' => 'Are You A Cannabis Consumer?',
			'FldDesc' => 'Are you a medical cannabis patient and/or a recreational consumer?',
			'FldValues' => 'Medical Patient;Recreational Consumer;Both;Other',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 245,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'AreYouConsumerOther',
			'FldEng' => 'Are You Consumer?.. Other',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 246,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'HowOften',
			'FldEng' => 'How often do you use cannabis?',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Use Frequency',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 247,
			'FldDatabase' => '1',
			'FldTable' => '49',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'WhatKinds',
			'FldEng' => 'What kinds of cannabis?',
			'FldDesc' => 'What kinds of cannabis products do you normally purchase?',
			'FldValues' => 'Def::Kinds of Cannabis Purchase',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 248,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'WhatKindsOther',
			'FldEng' => 'What other kinds of cannabis?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 249,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'YouNotice',
			'FldEng' => 'What do you notice?',
			'FldDesc' => 'When visiting a dispensary or ordering through a delivery service, do you notice:',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 250,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'OftenSustainable',
			'FldEng' => 'How Often Sustainable?',
			'FldDesc' => 'How often do you purchase sustainably grown cannabis?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 251,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'BusCommitment',
			'FldEng' => 'Company\'s Sustainability Commitment',
			'FldDesc' => 'How would a company\'s commitment to Environmental Sustainability impact your decision to purchase their product?',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 252,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'KnowMore',
			'FldEng' => 'Want To Know More?',
			'FldDesc' => 'Would you like to know more about how your cannabis is grown, processed, and packaged?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 253,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'SpendMore',
			'FldEng' => 'Spend More For Sustainable?',
			'FldDesc' => 'Would you spend more money on cannabis if you knew it was grown, processed, and packaged sustainably?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 254,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'IssuesMatter',
			'FldEng' => 'Do These Issues Matter?',
			'FldDesc' => 'Do any of these sustainability issues matter to you?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 255,
			'FldDatabase' => '1',
			'FldTable' => '49',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this Purchase.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 256,
			'FldDatabase' => '1',
			'FldTable' => '50',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this issue.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 257,
			'FldDatabase' => '1',
			'FldTable' => '50',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'IssuesMatter',
			'FldEng' => 'Do These Issues Matter?',
			'FldDesc' => 'Do any of these sustainability issues matter to you?',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Issues Matter',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 259,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'Gender',
			'FldEng' => 'Gender',
			'FldDesc' => 'Indicates how the consumer describes their own gender.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 260,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'Student',
			'FldEng' => 'Currently a Student',
			'FldDesc' => 'Are you currently a student?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 261,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'Employed',
			'FldEng' => 'Currently Employed',
			'FldDesc' => 'Are you currently employed?',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 262,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'Meaning',
			'FldEng' => 'What\'s It Mean To You?',
			'FldDesc' => 'What does Sustainability mean to you?',
			'FldType' => 'TEXT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 284,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '43',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 285,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 286,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 287,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 288,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 289,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 290,
			'FldDatabase' => '1',
			'FldTable' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 291,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '43',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 292,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 293,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 294,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 295,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 296,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 297,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '115',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 298,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'ZipCode',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'Indicates the postal code where the business or organization is based.',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 299,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '43',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 300,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 301,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '41',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 302,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '42',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 303,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '40',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 304,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '38',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 305,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '39',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 306,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '43',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 307,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 308,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 309,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 310,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 311,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 312,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 313,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'CleanGreen',
			'FldEng' => 'Clean Green Certified',
			'FldDesc' => 'Indicates whether or not this business is Clean Green certified.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 314,
			'FldDatabase' => '1',
			'FldTable' => '51',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this Purchase.',
			'FldForeignTable' => '48',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 315,
			'FldDatabase' => '1',
			'FldTable' => '51',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'UseID',
			'FldEng' => 'Use Classification',
			'FldDesc' => 'In what kinds of cannabis use do you normally partake?',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Use Classification',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 316,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this Purchase.',
			'FldForeignTable' => '48',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 317,
			'FldDatabase' => '1',
			'FldTable' => '52',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Access',
			'FldEng' => 'Method of Access',
			'FldDesc' => 'Indicated the definition ID of the method of access.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Method of Purchase',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 318,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'FirstName',
			'FldEng' => 'Respondent First Name',
			'FldDesc' => 'Indicates the first name of the business\' employee who is completing the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 319,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'LastName',
			'FldEng' => 'Respondent Last Name',
			'FldDesc' => 'Indicates the last name of the business\' employee who is completing the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 320,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Respondent Title',
			'FldDesc' => 'Indicates the title or position of the business\' employee who is completing the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 321,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'Email',
			'FldEng' => 'Respondent Email',
			'FldDesc' => 'Indicates the email address of the business\' employee who is completing the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 322,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'MultipleStates',
			'FldEng' => 'Multiple States',
			'FldDesc' => 'Indicates whether or not this business operates in multiple states.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 323,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being associated with a state in this row.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 324,
			'FldDatabase' => '1',
			'FldTable' => '53',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'State',
			'FldEng' => 'State',
			'FldDesc' => 'Indicates the abbreviation of the state where this business operates.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '2',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 325,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'Phone',
			'FldEng' => 'Phone Number',
			'FldDesc' => 'Indicates the phone number of the business\' employee who is completing the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 326,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'SectorOther',
			'FldEng' => 'Other Industry Sector',
			'FldDesc' => 'Indicates the business\' other industry sector which was not included in the main list of options.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 327,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'KnowCsr',
			'FldEng' => 'Know what Corporate Social Responsibility is?',
			'FldDesc' => 'Indicates whether or not this respondent knows what Corporate Social Responsibility is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 328,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'KnowEs',
			'FldEng' => 'Know what Environmental Sustainability is?',
			'FldDesc' => 'Indicates whether or not this respondent knows what Environmental Sustainability is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 329,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '22',
			'FldSpecSource' => '0',
			'FldName' => 'KnowEsgReporting',
			'FldEng' => 'Know what Environmental, Social, & Governance reporting is?',
			'FldDesc' => 'Indicates whether or not this respondent knows what Environmental, Social, & Governance reporting is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 330,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'InvestorAskEs',
			'FldEng' => 'Investor asked about Environmental Sustainability?',
			'FldDesc' => 'Indicates whether or not an investor ever inquired about the businesses Environmental Sustainability efforts?',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 331,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'InvestorAskCsr',
			'FldEng' => 'Investor asked about Corporate Social Responsibility?',
			'FldDesc' => 'Indicates whether or not an investor ever inquired about the businesses Corporate Social Responsibility efforts?',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 332,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'RequiredCsr',
			'FldEng' => 'Corporate Social Responsibility required for license',
			'FldDesc' => 'Indicates whether or not the business is required to participate in Corporate Social Responsibility to obtain a license.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 333,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '26',
			'FldSpecSource' => '0',
			'FldName' => 'RequiredEsp',
			'FldEng' => 'Environmental Sustainability Plan required for license',
			'FldDesc' => 'Indicates whether or not the business is required to demonstrate an Environmental Sustainability Plan to obtain a license.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 334,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '27',
			'FldSpecSource' => '0',
			'FldName' => 'CurrentCsr',
			'FldEng' => 'Currently practices CSR?',
			'FldDesc' => 'Indicates whether or not the business currently practices CSR.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 335,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '28',
			'FldSpecSource' => '0',
			'FldName' => 'CurrentCsrOther',
			'FldEng' => 'Other current CSR practice',
			'FldDesc' => 'Indicates the other CSR strategies this business currently practices.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 336,
			'FldDatabase' => '1',
			'FldTable' => '54',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being associated with a sector in this row.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 337,
			'FldDatabase' => '1',
			'FldTable' => '54',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Practice',
			'FldEng' => 'CSR Practice',
			'FldDesc' => 'Indicates the specific CSR practice currently in place by the business.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 338,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '29',
			'FldSpecSource' => '0',
			'FldName' => 'CurrentCsrProgram',
			'FldEng' => 'CSR program with staff?',
			'FldDesc' => 'Indicates whether or not this business currently has an ongoing Corporate Social Responsibility program in place, with staff time dedicated to managing its operations and effectiveness.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 339,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '30',
			'FldSpecSource' => '0',
			'FldName' => 'CurrentCsrStaffTime',
			'FldEng' => 'CSR program staff time',
			'FldDesc' => 'Indicates how much staff time is dedicated to this business\' ongoing CSR program.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business CSR Staff Time',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 340,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being associated with a sector in this row.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 341,
			'FldDatabase' => '1',
			'FldTable' => '55',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Reason',
			'FldEng' => 'Reason why no CSR program',
			'FldDesc' => 'Indicates the reason this business gives for not having an ongoing CSR program.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business CSR Why Not',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 342,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '31',
			'FldSpecSource' => '0',
			'FldName' => 'CurrentEs',
			'FldEng' => 'Currently practices ES?',
			'FldDesc' => 'Indicates whether or not this business currently practices Environmental Sustainability.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 343,
			'FldDatabase' => '1',
			'FldTable' => '56',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being associated with a sector in this row.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 344,
			'FldDatabase' => '1',
			'FldTable' => '56',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Practice',
			'FldEng' => 'ES Practice',
			'FldDesc' => 'Indicates the specific ES practice currently in place by the business.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business ES Practices',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 345,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '32',
			'FldSpecSource' => '0',
			'FldName' => 'CurrentEsStaffTime',
			'FldEng' => 'ES practice staff time',
			'FldDesc' => 'Indicates how much staff time is dedicated to this business\' ongoing ES program.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business ES Staff Time',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 346,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldSpecSource' => '0',
			'FldName' => 'BusID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being associated with a sector in this row.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 347,
			'FldDatabase' => '1',
			'FldTable' => '57',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Reason',
			'FldEng' => 'Reason why no ES program',
			'FldDesc' => 'Indicates the reason this business gives for not having an ongoing ES program.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business ES Why Not',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 348,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '33',
			'FldSpecSource' => '0',
			'FldName' => 'Public',
			'FldEng' => 'Publicly share info',
			'FldDesc' => 'Indicates whether or not this business would like publicly share the information they submitted about their CSR and ES efforts.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 349,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '34',
			'FldSpecSource' => '0',
			'FldName' => 'PublicFeatured',
			'FldEng' => 'Publicly feature efforts',
			'FldDesc' => 'Indicates whether or not this business would like their CSR or ES efforts to be publicly featured on The Kind Guide Web App.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 350,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '35',
			'FldSpecSource' => '0',
			'FldName' => 'KnowCc',
			'FldEng' => 'Know what Conscious Capitalism is?',
			'FldDesc' => 'Indicates whether or not this respondent knows what Conscious Capitalism is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 351,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '36',
			'FldSpecSource' => '0',
			'FldName' => 'EsOther',
			'FldEng' => 'Other Current ES Practice',
			'FldDesc' => 'Indicates the other ES strategies this business currently practices.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 352,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '37',
			'FldSpecSource' => '0',
			'FldName' => 'FreeSupport',
			'FldEng' => 'Interested in Free Support?',
			'FldDesc' => 'Indicates whether or not this business is intersted in free support in establishing or managing a CSR or ES program.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 353,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '22',
			'FldSpecSource' => '0',
			'FldName' => 'Words',
			'FldEng' => 'Use \'cannabis\' and \'marijuana\' interchangeably?',
			'FldDesc' => 'Indicates whether or not this consumer uses the words \'cannabis\' and \'marijuana\' interchangeably.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Words Interchangeable',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 354,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'WordsDefine',
			'FldEng' => 'Define \'cannabis\' and \'marijuana\'',
			'FldDesc' => 'Indicates the consumer\'s definitions for \'cannabis\' and \'marijuana\'.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 355,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'Zip',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'Indicates this consumer\'s geographical zip or postal code.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 356,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'Age',
			'FldEng' => 'Age Range',
			'FldDesc' => 'Indicates the age range of this consumer.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Age Ranges',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 357,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '26',
			'FldSpecSource' => '0',
			'FldName' => 'Demographic',
			'FldEng' => 'Answer demographics?',
			'FldDesc' => 'Indicates whether or not the consumer chose to answer demographic questions.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 358,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '27',
			'FldSpecSource' => '0',
			'FldName' => 'Education',
			'FldEng' => 'Education Level',
			'FldDesc' => 'Indicates the current/furthest education level of this consumer.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Education Level',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 359,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '38',
			'FldSpecSource' => '0',
			'FldName' => 'DisabilityCommunity',
			'FldEng' => 'Know the disability community?',
			'FldDesc' => 'Indicates whether or not this consumer is — or knows — a member of the disability community.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 360,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '56',
			'FldSpecSource' => '0',
			'FldName' => 'AccessibilityImpacts',
			'FldEng' => 'Does accessibility have impacts?',
			'FldDesc' => 'Indicates whether or not accessibility issues impact the ability of this consumer — or their friends — to acquire cannabis.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 361,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '57',
			'FldSpecSource' => '0',
			'FldName' => 'AccessibilityHow',
			'FldEng' => 'How is accessibility impacted?',
			'FldDesc' => 'Description by the consumer of how accessibility is impacted.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 362,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '58',
			'FldSpecSource' => '0',
			'FldName' => 'Parent',
			'FldEng' => 'Is Parent',
			'FldDesc' => 'Indicates whether or not this consumer is a parent.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 363,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '59',
			'FldSpecSource' => '0',
			'FldName' => 'ParentOfAdult',
			'FldEng' => 'Parent of an adult?',
			'FldDesc' => 'Indicates whether or not this consumer has any adult children.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 364,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '60',
			'FldSpecSource' => '0',
			'FldName' => 'ParentConsumer',
			'FldEng' => 'Consume cannabis with adult children?',
			'FldDesc' => 'Indicates whether or not this consumer consumes cannabis their adult children.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 365,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '36',
			'FldSpecSource' => '0',
			'FldName' => 'Interned',
			'FldEng' => 'Interned in the industry?',
			'FldDesc' => 'Indicates whether or not this consumer has interned in the cannabis industry.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 366,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '45',
			'FldSpecSource' => '0',
			'FldName' => 'InternPaid',
			'FldEng' => 'Paid intern in the industry?',
			'FldDesc' => 'Indicates whether or not this consumer has had a paid internship in the cannabis industry.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 367,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '29',
			'FldSpecSource' => '0',
			'FldName' => 'TradeShow',
			'FldEng' => 'Attended a trade show, conference, or event?',
			'FldDesc' => 'Indicates whether or not this consumer has ever attended a cannabis industry trade show, conference, or event.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 368,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '28',
			'FldSpecSource' => '0',
			'FldName' => 'Festival',
			'FldEng' => 'Attended a festival, cup, or competition?',
			'FldDesc' => 'Indicates whether or not this consumer has ever attended a cannabis community festival, cup, or competition.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 369,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '44',
			'FldSpecSource' => '0',
			'FldName' => 'EventAccessibile',
			'FldEng' => 'Observed an event advertising accessibility commitments?',
			'FldDesc' => 'Indicates whether or not this consumer has ever observed an event advertising accessibility commitments.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 370,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '43',
			'FldSpecSource' => '0',
			'FldName' => 'EventGreen',
			'FldEng' => 'Observed an Certified Green or Carbon Neutral event?',
			'FldDesc' => 'Indicates whether or not this consumer has ever observed a cannabis event that was Certified Green or Carbon Neutral.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 371,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '53',
			'FldSpecSource' => '0',
			'FldName' => 'EventVolunteer',
			'FldEng' => 'Volunteered at event?',
			'FldDesc' => 'Indicates whether or not this consumer has ever  volunteered or completed a work-trade type agreement to participate in cannabis industry or cannabis community event of any kind.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 372,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '55',
			'FldSpecSource' => '0',
			'FldName' => 'IndustryWork',
			'FldEng' => 'Work in the industry?',
			'FldDesc' => 'Indicates whether or not this consumer works in — or has clients in — the cannabis industry.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 373,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '31',
			'FldSpecSource' => '0',
			'FldName' => 'IndustryEver',
			'FldEng' => 'Ever worked in the industry?',
			'FldDesc' => 'Indicates whether or not this consumer has ever worked in — or had clients in — the cannabis industry.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 374,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '39',
			'FldSpecSource' => '0',
			'FldName' => 'KnowCc',
			'FldEng' => 'Know what Conscious Capitalism is?',
			'FldDesc' => 'Indicates whether or not this consumer knows what Conscious Capitalism is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 375,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '40',
			'FldSpecSource' => '0',
			'FldName' => 'KnowCsr',
			'FldEng' => 'Know what CSR is?',
			'FldDesc' => 'Indicates whether or not this consumer knows what Corporate Social Responsibility (CSR) is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 376,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '41',
			'FldSpecSource' => '0',
			'FldName' => 'KnowEs',
			'FldEng' => 'Know what ES is?',
			'FldDesc' => 'Indicates whether or not this consumer knows what Environmental Sustainability (ES) is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 377,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '51',
			'FldSpecSource' => '0',
			'FldName' => 'UseSocial',
			'FldEng' => 'Use in social settings?',
			'FldDesc' => 'Indicates whether or not this consumer uses cannabis in social settings.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 378,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '50',
			'FldSpecSource' => '0',
			'FldName' => 'UseNature',
			'FldEng' => 'Use in nature?',
			'FldDesc' => 'Indicates whether or not this consumer uses cannabis in nature.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 379,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '52',
			'FldSpecSource' => '0',
			'FldName' => 'UseFamily',
			'FldEng' => 'Use with family members?',
			'FldDesc' => 'Indicates whether or not this consumer uses cannabis with family members.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 380,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '37',
			'FldSpecSource' => '0',
			'FldName' => 'UseIntroduce',
			'FldEng' => 'Introduce people to cannabis?',
			'FldDesc' => 'Indicates whether or not this consumer introduces people to cannabis.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 381,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '48',
			'FldSpecSource' => '0',
			'FldName' => 'IdentitySocial',
			'FldEng' => 'Part of social identity?',
			'FldDesc' => 'Indicates whether or not this consumer considers cannabis as part of their social identity.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 382,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '46',
			'FldSpecSource' => '0',
			'FldName' => 'IdentityPersonal',
			'FldEng' => 'Part of personal identity?',
			'FldDesc' => 'Indicates whether or not this consumer considers cannabis as part of their personal identity.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 383,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '47',
			'FldSpecSource' => '0',
			'FldName' => 'IdentityPolitical',
			'FldEng' => 'Part of political identity?',
			'FldDesc' => 'Indicates whether or not this consumer considers cannabis as part of their political identity.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 384,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '34',
			'FldSpecSource' => '0',
			'FldName' => 'History',
			'FldEng' => 'Familiar with prohibition history?',
			'FldDesc' => 'Indicates whether or not this consumer is familiar with the history of marijuana prohibition.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 385,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '30',
			'FldSpecSource' => '0',
			'FldName' => 'SupportLobbied',
			'FldEng' => 'Ever lobbied for marijuana policy reform?',
			'FldDesc' => 'Indicates whether or not this consumer has ever lobbied an elected official or submitted testimony on issues of marijuana policy reform.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 386,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '35',
			'FldSpecSource' => '0',
			'FldName' => 'SupportDonate',
			'FldEng' => 'Financially supported policy reform organizations?',
			'FldDesc' => 'Indicates whether or not this consumer has ever financially supported organizations that have lobbied an elected official or submitted testimony on issues of marijuana policy reform.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 387,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '54',
			'FldSpecSource' => '0',
			'FldName' => 'SupportVolunteer',
			'FldEng' => 'Volunteered for policy reform?',
			'FldDesc' => 'Indicates whether or not this consumer has ever volunteered on marijuana policy reform at the local or federal level.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 388,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '32',
			'FldSpecSource' => '0',
			'FldName' => 'Biology',
			'FldEng' => 'Familiar with cannabis plant biology?',
			'FldDesc' => 'Indicates whether or not this consumer is familiar with cannabis plant biology.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 389,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '33',
			'FldSpecSource' => '0',
			'FldName' => 'BiologyBody',
			'FldEng' => 'Familiar with effects of cannabis on the human body?',
			'FldDesc' => 'Indicates whether or not this consumer is familiar with human physiology and the pharmacological effects of cannabis on the human body.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 390,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '42',
			'FldSpecSource' => '0',
			'FldName' => 'BiologyEndo',
			'FldEng' => 'Know what the endocannabinoid system is?',
			'FldDesc' => 'Indicates whether or not this consumer is familiar with the endocannabinoid system.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 391,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '49',
			'FldSpecSource' => '0',
			'FldName' => 'Community',
			'FldEng' => 'Part of the cannabis community?',
			'FldDesc' => 'Indicates whether or not this consumer considers themself a part of the cannabis community.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 392,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '66',
			'FldSpecSource' => '0',
			'FldName' => 'OftenBrandAdCsr',
			'FldEng' => 'Brands advertise CSR commitment?',
			'FldDesc' => 'Indicates how frequently this consumer observes brands that advertise their commitment to Corporate Social Responsibility.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 393,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '67',
			'FldSpecSource' => '0',
			'FldName' => 'OftenBrandPracticeCsr',
			'FldEng' => 'Brands practice CSR?',
			'FldDesc' => 'Indicates how frequently this consumer observes brands that practice Corporate Social Responsibility.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 394,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '111',
			'FldSpecSource' => '0',
			'FldName' => 'OftenPackaging',
			'FldEng' => 'Sustainable packaging design?',
			'FldDesc' => 'Indicates how frequently this consumer observes sustainable packaging design.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 395,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '68',
			'FldSpecSource' => '0',
			'FldName' => 'OftenBrandsResponsible',
			'FldEng' => 'Brands that market as responsible?',
			'FldDesc' => 'Indicates how frequently this consumer observes brands that market themselves as socially responsible or environmentally sustainable.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 396,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '79',
			'FldSpecSource' => '0',
			'FldName' => 'OftenDispensVapeRec',
			'FldEng' => 'Dispensary vape pen recycling?',
			'FldDesc' => 'Indicates how frequently this consumer observes dispensaries that offer vape pen recycling.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 397,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '81',
			'FldSpecSource' => '0',
			'FldName' => 'OftenDispensCompassion',
			'FldEng' => 'Dispensary with compassion programs?',
			'FldDesc' => 'Indicates how frequently this consumer observes dispensaries that offer compassion programs for medical patients.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 398,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '80',
			'FldSpecSource' => '0',
			'FldName' => 'OftenDispensEvents',
			'FldEng' => 'Dispensary with community events?',
			'FldDesc' => 'Indicates how frequently this consumer observes dispensaries that host community events.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 399,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '74',
			'FldSpecSource' => '0',
			'FldName' => 'OftenClasses',
			'FldEng' => 'Classes hosted by cannabis businesses?',
			'FldDesc' => 'Indicates how frequently this consumer observes free educational classes hosted by cannabis businesses.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 400,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '101',
			'FldSpecSource' => '0',
			'FldName' => 'OftenProducts',
			'FldEng' => 'Products marketed biodynamic/sustainable?',
			'FldDesc' => 'Indicates how frequently this consumer observes products marketed as biodynamic or sustainable.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Frequency Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 401,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '114',
			'FldSpecSource' => '0',
			'FldName' => 'LklyDispensCsr',
			'FldEng' => 'Visit dispensary for CSR?',
			'FldDesc' => 'Indicates how likely this consumer is to visit a dispensary because of their commitment to CSR in the community.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 402,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '70',
			'FldSpecSource' => '0',
			'FldName' => 'LklyProductCeleb',
			'FldEng' => 'Buy product endorsed by celebrity?',
			'FldDesc' => 'Indicates how likely this consumer is to buy a product because it is created or endorsed by a celebrity.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 403,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '71',
			'FldSpecSource' => '0',
			'FldName' => 'LklyProductNonprofit',
			'FldEng' => 'Buy product endorsed by nonprofit?',
			'FldDesc' => 'Indicates how likely this consumer is to buy a product because it is endorsed by a nonprofit or community coalition.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 404,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '94',
			'FldSpecSource' => '0',
			'FldName' => 'LklyInvestigateCsr',
			'FldEng' => 'Investigate cannabis company\'s CSR claims?',
			'FldDesc' => 'Indicates how likely this consumer is to investigate a cannabis company\'s claims about Corporate Social Responsibility.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 405,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '112',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandsTellBad',
			'FldEng' => 'Tell others about bad cannabis brands?',
			'FldDesc' => 'Indicates how likely this consumer is to tell others about bad cannabis brands.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 406,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '113',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandsTellGood',
			'FldEng' => 'Tell others about good cannabis brands?',
			'FldDesc' => 'Indicates how likely this consumer is to tell others about good cannabis brands.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 407,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '65',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandBoycott',
			'FldEng' => 'Boycott brand for misconduct or harassment?',
			'FldDesc' => 'Indicates how likely this consumer is to boycott a brand based upon evidence of misconduct or harassment.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 408,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '85',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandTellBoycott',
			'FldEng' => 'Encourage others to boycott brand for misconduct?',
			'FldDesc' => 'Indicates how likely this consumer is to encourage others to boycott a brand based upon misconduct.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 409,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '104',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandShare',
			'FldEng' => 'Share favorite products with others?',
			'FldDesc' => 'Indicates how likely this consumer is to share products from their favorite cannabis brands with others.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 410,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '103',
			'FldSpecSource' => '0',
			'FldName' => 'LklyPurchaseCsr',
			'FldEng' => 'Purchase for CSR efforts?',
			'FldDesc' => 'Indicates how likely this consumer is to make a decision to purchase cannabis products based on what you know about a brands CSR efforts.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 411,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '96',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandsEco',
			'FldEng' => 'Look for eco-friendly brands?',
			'FldDesc' => 'Indicates how likely this consumer is to look for eco-friendly brands.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 412,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '63',
			'FldSpecSource' => '0',
			'FldName' => 'LklyPurchaseAsk',
			'FldEng' => 'Ask friends for purchase recommendations?',
			'FldDesc' => 'Indicates how likely this consumer is to ask a friend for recommendations before purchasing.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 413,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '62',
			'FldSpecSource' => '0',
			'FldName' => 'LklyPurchaseAskExpert',
			'FldEng' => 'Ask budtender, nurse, or physician for purchase recommendations?',
			'FldDesc' => 'Indicates how likely this consumer is to ask a budtender, on-site nurse, or physician for recommendations.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 414,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '77',
			'FldSpecSource' => '0',
			'FldName' => 'LklyPurchaseMarketing',
			'FldEng' => 'Consider marketing for purchase?',
			'FldDesc' => 'Indicates how likely this consumer is to consider marketing when making a purchase.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 415,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '64',
			'FldSpecSource' => '0',
			'FldName' => 'LklyPurchaseAskNone',
			'FldEng' => 'Ask no questions when making a purchase?',
			'FldDesc' => 'Indicates how likely this consumer is to ask no questions when making a purchase.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 416,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '61',
			'FldSpecSource' => '0',
			'FldName' => 'LklyProductBudtend',
			'FldEng' => 'Ask budtender product questions?',
			'FldDesc' => 'Indicates how likely this consumer is to ask a budtender questions about a product.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 417,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '69',
			'FldSpecSource' => '0',
			'FldName' => 'LklyPurchaseNew',
			'FldEng' => 'Buy a new product?',
			'FldDesc' => 'Indicates how likely this consumer is to Buy a new product you\'ve never tried.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 418,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '106',
			'FldSpecSource' => '0',
			'FldName' => 'LklyDispensBrowse',
			'FldEng' => 'Spend time browsing dispensary?',
			'FldDesc' => 'Indicates how likely this consumer is to spend time browsing and shopping while at a dispensary.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 419,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '109',
			'FldSpecSource' => '0',
			'FldName' => 'LklyBrandRespons',
			'FldEng' => 'Support brand for responsibility?',
			'FldDesc' => 'Indicates how likely this consumer is to support a brand known for being socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Likelihood Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 420,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '100',
			'FldSpecSource' => '0',
			'FldName' => 'ImpProductOrganic',
			'FldEng' => 'Organic Products?',
			'FldDesc' => 'Indicates the importance organic, all-natural, synthetic chemical free products. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 421,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '73',
			'FldSpecSource' => '0',
			'FldName' => 'ImpLeadership',
			'FldEng' => 'Character and leadership?',
			'FldDesc' => 'Indicates the importance of character and leadership of executive team and co-founders. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 422,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '78',
			'FldSpecSource' => '0',
			'FldName' => 'ImpService',
			'FldEng' => 'Customer service experience?',
			'FldDesc' => 'Indicates the importance of customer service experience. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 423,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '84',
			'FldSpecSource' => '0',
			'FldName' => 'ImpEmployees',
			'FldEng' => 'Employee satisfaction/retention?',
			'FldDesc' => 'Indicates the importance of employee satisfaction and retention. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 424,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '89',
			'FldSpecSource' => '0',
			'FldName' => 'ImpFairLabor',
			'FldEng' => 'Fair-labor claims?',
			'FldDesc' => 'Indicates the importance of claims of fair-labor practices. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 425,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '90',
			'FldSpecSource' => '0',
			'FldName' => 'ImpFairEvidence',
			'FldEng' => 'Fair-labor evidence?',
			'FldDesc' => 'Indicates the importance of evidence of fair labor practices. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 426,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '72',
			'FldSpecSource' => '0',
			'FldName' => 'ImpCertOrganic',
			'FldEng' => 'Certified organic labeling?',
			'FldDesc' => 'Indicates the importance of certified organic labeling. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 427,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '93',
			'FldSpecSource' => '0',
			'FldName' => 'ImpPolicyHowLong',
			'FldEng' => 'How long working on policy reform?',
			'FldDesc' => 'Indicates the importance of the length of time business or founders have been working on marijuana policy reform issues. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 428,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '99',
			'FldSpecSource' => '0',
			'FldName' => 'ImpTradeMember',
			'FldEng' => 'Member of cannabis trade organization?',
			'FldDesc' => 'Indicates the importance of being a member of cannabis trade organization (e.g. National Cannabis Industry Association, National Cannabis Bar Association). This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 429,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '92',
			'FldSpecSource' => '0',
			'FldName' => 'ImpIndustryHowLong',
			'FldEng' => 'How long working in industry?',
			'FldDesc' => 'Indicates the importance of the length of time company or founders have spent working in the cannabis industry. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 430,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '98',
			'FldSpecSource' => '0',
			'FldName' => 'ImpMarketingEco',
			'FldEng' => 'Marketing as eco-friendly?',
			'FldDesc' => 'Indicates the importance of branding/marketing that signifies eco-friendly product. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 431,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '88',
			'FldSpecSource' => '0',
			'FldName' => 'ImpEvidenceEs',
			'FldEng' => 'Evidence of Environmental Sustainability action?',
			'FldDesc' => 'Indicates the importance of evidence of action toward Environmental Sustainability. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 432,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '97',
			'FldSpecSource' => '0',
			'FldName' => 'ImpMarketingCsr',
			'FldEng' => 'Marketing as CSR?',
			'FldDesc' => 'Indicates the importance of branding/marketing that signifies CSR commitments. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 433,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '105',
			'FldSpecSource' => '0',
			'FldName' => 'ImpSocialBus',
			'FldEng' => 'Social business?',
			'FldDesc' => 'Indicates the importance if a company is a social business or holds a Benefit Corporation tax-status. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 434,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '87',
			'FldSpecSource' => '0',
			'FldName' => 'ImpEvidenceCsr',
			'FldEng' => 'Evidence of CSR action?',
			'FldDesc' => 'Indicates the importance in evidence of action towards Corporate Social Responsibility. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 435,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '82',
			'FldSpecSource' => '0',
			'FldName' => 'ImpDonateCharity',
			'FldEng' => 'Donations to large mainstream charities?',
			'FldDesc' => 'Indicates the importance of philanthropic donations to large mainstream charities (e.g. American Cancer Society). This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 436,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '83',
			'FldSpecSource' => '0',
			'FldName' => 'ImpDonateLocal',
			'FldEng' => 'Donations to local community nonprofits?',
			'FldDesc' => 'Indicates the importance of direct contributions to local community nonprofits. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 437,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '95',
			'FldSpecSource' => '0',
			'FldName' => 'ImpLocalOwned',
			'FldEng' => 'Locally owned business?',
			'FldDesc' => 'Indicates the importance of locally owned business. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 438,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '107',
			'FldSpecSource' => '0',
			'FldName' => 'ImpLocalEvents',
			'FldEng' => 'Sponsoring local cannabis community events?',
			'FldDesc' => 'Indicates the importance of sponsoring local cannabis community events. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 439,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '110',
			'FldSpecSource' => '0',
			'FldName' => 'ImpSupportNonprofits',
			'FldEng' => 'Support reform nonprofits?',
			'FldDesc' => 'Indicates the importance of support to Drug War or criminal justice reform nonprofit organizations. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 440,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '76',
			'FldSpecSource' => '0',
			'FldName' => 'ImpCommunityEngage',
			'FldEng' => 'Company impactful community engagement plan?',
			'FldDesc' => 'Indicates the importance if company manages an efficient and impactful community engagement plan. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 441,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '91',
			'FldSpecSource' => '0',
			'FldName' => 'ImpHireIncarcerated',
			'FldEng' => 'Hiring formerly incarcerated individuals?',
			'FldDesc' => 'Indicates the importance of hiring of formerly incarcerated individuals. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 442,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '75',
			'FldSpecSource' => '0',
			'FldName' => 'ImpCoops',
			'FldEng' => 'Co-ops or employee owned?',
			'FldDesc' => 'Indicates the importance if a company is a co-op or employee owned. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 443,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '86',
			'FldSpecSource' => '0',
			'FldName' => 'ImpEngagesAll',
			'FldEng' => 'Engages all stakeholders?',
			'FldDesc' => 'Indicates the importance if a company engages all stakeholders (employees, community, executive management) in their corporate social responsibility process. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 444,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '108',
			'FldSpecSource' => '0',
			'FldName' => 'ImpStaffTimeRespons',
			'FldEng' => 'Staff time to responsibility efforts?',
			'FldDesc' => 'Indicates the importance if a company dedicates staff time and resources to social responsibility efforts. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 445,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '102',
			'FldSpecSource' => '0',
			'FldName' => 'ImpAnnualBenefit',
			'FldEng' => 'Publishes annual community benefit report?',
			'FldDesc' => 'Indicates the importance if a company publishes annual community benefit report. This is an aspect of how this consumer is convinced that a brand is socially responsible.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Importance Scale',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 446,
			'FldDatabase' => '1',
			'FldTable' => '58',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this issue.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 447,
			'FldDatabase' => '1',
			'FldTable' => '59',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this issue.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 448,
			'FldDatabase' => '1',
			'FldTable' => '60',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this issue.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 449,
			'FldDatabase' => '1',
			'FldTable' => '61',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this issue.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 450,
			'FldDatabase' => '1',
			'FldTable' => '58',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Role',
			'FldEng' => 'Industry Role',
			'FldDesc' => 'Indicates the role this consumer plays in the cannabis industry.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Industry Role',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 451,
			'FldDatabase' => '1',
			'FldTable' => '59',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Sector',
			'FldEng' => 'Industry Sector',
			'FldDesc' => 'Indicates the cannabis industry sector this consumer works in.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business Industry Sector',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 452,
			'FldDatabase' => '1',
			'FldTable' => '62',
			'FldSpecSource' => '0',
			'FldName' => 'ConID',
			'FldEng' => 'Consumer Survey ID',
			'FldDesc' => 'Indicates the unique ID of the Consumer Survey associated with this issue.',
			'FldForeignTable' => '48',
			'FldType' => 'INT',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 454,
			'FldDatabase' => '1',
			'FldTable' => '62',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Certification',
			'FldEng' => 'Certification',
			'FldDesc' => 'Indicates the certification recognized by the consumer.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Recognize Certifications',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 455,
			'FldDatabase' => '1',
			'FldTable' => '60',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Advocate',
			'FldEng' => 'Marijuana Advocate',
			'FldDesc' => 'Indicates the marijuana advocate recognized by the consumer.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Recognize Advocates',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 456,
			'FldDatabase' => '1',
			'FldTable' => '61',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Familiarize',
			'FldEng' => 'How Familiarize',
			'FldDesc' => 'Indicates the ways this consumer familiarizes themselves with cannabis brands.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Brand Familiarize',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 457,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Email',
			'FldEng' => 'Email',
			'FldDesc' => 'Indicates the email address of this consumer.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 458,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'NameAlt',
			'FldEng' => 'Alternate Name',
			'FldDesc' => 'Indicates another name by which this business is known. This may be for many reasons, including where an employees suggests/requests an update to our official records.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 459,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Status',
			'FldEng' => 'Survey Status',
			'FldDesc' => 'Indicates the current status of the business survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Business Survey Status',
			'FldDefault' => '323',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 460,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'IsTest',
			'FldEng' => 'Is Test Run',
			'FldDesc' => 'Indicates whether or not the completion of this survey is just part a user test.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 461,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Status',
			'FldEng' => 'Survey Status',
			'FldDesc' => 'Indicates the status of this survey, whether it has been completed or not.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Consumer Survey Status',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 462,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '116',
			'FldSpecSource' => '0',
			'FldName' => 'EventVolunContact',
			'FldEng' => 'Contact event to volunteer',
			'FldDesc' => 'Indicates whether or not this consumer has ever contacted a cannabis industry event, conference, or trade show in search of work-trade opportunities.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 463,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '43',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback1',
			'FldEng' => 'Feedback on Page 1',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the first page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 464,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '44',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback2',
			'FldEng' => 'Feedback on Page 2',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the second page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 465,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '45',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback3',
			'FldEng' => 'Feedback on Page 3',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the third page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 466,
			'FldDatabase' => '1',
			'FldTable' => '44',
			'FldOrd' => '46',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback4',
			'FldEng' => 'Feedback on Page 4',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the fourth page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 467,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '117',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback1',
			'FldEng' => 'Feedback on Page 1',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the first page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 468,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '118',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback2',
			'FldEng' => 'Feedback on Page 2',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the second page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 469,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '119',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback3',
			'FldEng' => 'Feedback on Page 3',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the third page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 470,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '120',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback4',
			'FldEng' => 'Feedback on Page 4',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the fourth page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 471,
			'FldDatabase' => '1',
			'FldTable' => '48',
			'FldOrd' => '121',
			'FldSpecSource' => '0',
			'FldName' => 'Feedback5',
			'FldEng' => 'Feedback on Page 5',
			'FldDesc' => 'Indicates the optional user feedback provided at the bottom of the fifth page of the survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 472,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldSpecSource' => '0',
			'FldName' => 'BusinessID',
			'FldEng' => 'Business ID',
			'FldDesc' => 'Indicates which Business record is being invited here.',
			'FldForeignTable' => '44',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 473,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID who is initiating the Business invite.',
			'FldForeignTable' => '43',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 474,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 475,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 476,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 477,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 478,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 479,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 480,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Business Name',
			'FldDesc' => 'Indicates the name of the Business being invited, important for identifying it and comparing with existing records.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 481,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Location',
			'FldEng' => 'Business Location',
			'FldDesc' => 'Indicates the location of the Business being invited, important for identifying it and comparing with existing records.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 482,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'IsCustomer',
			'FldEng' => 'Purchased brand\'s products/services, or visited establishment?',
			'FldDesc' => 'Indicates whether or not the consumer has ever purchased this brand\'s products/services, or visited this business establishment.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Special,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 483,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Contact',
			'FldEng' => 'Contact Information',
			'FldDesc' => 'Indicates any types of contact information the user can provide for us to reach out to the business.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 484,
			'FldDatabase' => '1',
			'FldTable' => '63',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Notes',
			'FldEng' => 'Notes or Insights',
			'FldDesc' => 'Indicates any other notes or insights the user wants to provide The Kind Guide about this Business.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 487,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Organization Name',
			'FldDesc' => 'Indicates the name of the nonprofit organization stored in this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 488,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '43',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 489,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 490,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 491,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 492,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 493,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 494,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 495,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Website',
			'FldEng' => 'Organization Website',
			'FldDesc' => 'Indicates the website URL of the nonprofit organization stored in this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 496,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'IsEmployee',
			'FldEng' => 'Suggested By Employee',
			'FldDesc' => 'Indicates whether or not this nonprofit organization was suggested to The Kind Guide by an employee or founder.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 497,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Email',
			'FldEng' => 'Employee Email',
			'FldDesc' => 'Indicates the email address of the employee or founder of this nonprofit organization.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 498,
			'FldDatabase' => '1',
			'FldTable' => '64',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'TaxStatus',
			'FldEng' => 'Organization Tax Status',
			'FldDesc' => 'Indicates the tax status of this Nonprofit, important for distinguishing 501(c)3s.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Nonprofit Tax Status',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
	
	DB::table('SL_Definitions')->insert([
			'DefID' => 1,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Entry Type',
			'DefValue' => 'Transportation',
			'DefDescription' => 'This includes all usage of planes, trains, automobiles. This can also be used to log bicycling and walking.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 2,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Entry Type',
			'DefOrder' => '2',
			'DefValue' => 'Physical Things Purchased',
			'DefDescription' => 'This includes purchases of all other physical things in the real world.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 3,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Entry Type',
			'DefOrder' => '3',
			'DefValue' => 'Digital Things Used',
			'DefDescription' => 'This includes purchases of online services, and logging hours of computer usage.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 4,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Entry Type',
			'DefOrder' => '4',
			'DefValue' => 'Cannabis Things',
			'DefDescription' => 'This is specifically for purchases of physical things related to the cannabis industry.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 5,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Tag Types',
			'DefValue' => 'General'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 6,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Tag Types',
			'DefOrder' => '1',
			'DefValue' => 'Organizations'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 7,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Tag Types',
			'DefOrder' => '2',
			'DefValue' => 'Organization Department'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 8,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Tag Types',
			'DefOrder' => '3',
			'DefValue' => 'Events'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 9,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Tag Types',
			'DefOrder' => '4',
			'DefValue' => 'Event Projects'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 10,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Transportation Types',
			'DefOrder' => '5',
			'DefValue' => 'Plane'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 11,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Transportation Types',
			'DefOrder' => '4',
			'DefValue' => 'Train'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 12,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Transportation Types',
			'DefOrder' => '2',
			'DefValue' => 'Subway/Metro'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 13,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Transportation Types',
			'DefOrder' => '3',
			'DefValue' => 'Automobile'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 14,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Transportation Types',
			'DefOrder' => '1',
			'DefValue' => 'Bicycle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 15,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Transportation Types',
			'DefValue' => 'Walking'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 16,
			'DefDatabase' => '1',
			'DefSubset' => 'Log Entry Type',
			'DefOrder' => '1',
			'DefValue' => 'Travel Lodging',
			'DefDescription' => 'This includes all other accommodations related to travel.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 51,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-abbr',
			'DefDescription' => 'KindGuide'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 52,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-url',
			'DefDescription' => 'http://kind.homestead.test'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 53,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'http://thekind.guide'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 54,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'site-name',
			'DefDescription' => 'The Kind Guide'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 55,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-title',
			'DefDescription' => 'The Kind Guide #SparkSomethingGood'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 56,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-desc',
			'DefDescription' => 'DISCOVER THE KIND GUIDE: Your Go-To Source for Conscientious Cannabis Consumption. To truly improve and evolve our society, consumers must learn to prioritize businesses dedicated to more than just the bottom line. Once we see ourselves as the day-to-day investors of a business, I believe consumers can finally step into their power and catalyze the social progress we need to preserve our communities.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 57,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-keywords',
			'DefDescription' => 'Kind Guide, #KeepItGreen, Green B, Green B Consulting, cannabis industry, CSR, corporate social responsibility, ESG, SurvLoop, WikiWorldOrder, app, application, survey, database, data, database design,'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 58,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-img',
			'DefDescription' => '/kindguide/uploads/meta-img.jpg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 59,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-lrg',
			'DefDescription' => '/kindguide/uploads/kindguide-logo-1-trans.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 60,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-md',
			'DefDescription' => '/kindguide/uploads/kindguide-logo-1-trans.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 61,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-sm',
			'DefDescription' => '/kindguide/uploads/kindguide-logo-1-trans.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 62,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'shortcut-icon',
			'DefDescription' => '/kindguide/uploads/kindguide-ico.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 63,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'test-mode',
			'DefDescription' => 'Off'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 64,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'upload-types',
			'DefDescription' => 'Document Types'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 65,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'administrator',
			'DefValue' => 'Administrator',
			'DefDescription' => 'Highest system administrative privileges, can add, remove, and change permissions of other users'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 66,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'staff',
			'DefOrder' => '2',
			'DefValue' => 'Staff/Analyst',
			'DefDescription' => 'Full staff priveleges, can view but not edit technical specs'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 67,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'volunteer',
			'DefOrder' => '4',
			'DefValue' => 'Volunteer',
			'DefDescription' => 'Basic permission to pages and tools just for volunteers'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 68,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'databaser',
			'DefOrder' => '1',
			'DefValue' => 'Database Designer',
			'DefDescription' => 'Permissions to make edits in the database designing tools'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 69,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'brancher',
			'DefOrder' => '2',
			'DefValue' => 'User Experience Editor',
			'DefDescription' => 'Permissions to make edits in the user experience tools'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 70,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'signup-instruct',
			'DefDescription' => '<h1 class="mT0">Sign Up</h1>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 71,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-light',
			'DefDescription' => '#53f1eb'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 72,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-dark',
			'DefDescription' => '#2b3493'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 73,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faint',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 74,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-alert-light',
			'DefDescription' => '#f38c5f'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 75,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-alert-dark',
			'DefDescription' => '#ec2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 76,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-go-light',
			'DefDescription' => '#29B76F'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 77,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-go-dark',
			'DefDescription' => '#006D36'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 78,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'show-logo-title',
			'DefDescription' => 'Off'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 79,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-logo',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 80,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'users-create-db',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 81,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'xml-example-core-id',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 82,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license',
			'DefDescription' => 'Creative Commons Attribution-ShareAlike License'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 83,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-url',
			'DefDescription' => 'http://creativecommons.org/licenses/by-sa/3.0/'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 84,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-img',
			'DefDescription' => '/survloop/creative-commons-by-sa-88x31.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 85,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefValue' => 'Retail'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 86,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '4',
			'DefValue' => 'Manufacturing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 87,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '2',
			'DefValue' => 'Cultivation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 89,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ESG Status',
			'DefValue' => 'Advocate'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 90,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ESG Status',
			'DefOrder' => '1',
			'DefValue' => 'Plan'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 91,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ESG Status',
			'DefOrder' => '2',
			'DefValue' => 'None'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 92,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefValue' => 'Raw Flower'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 93,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '1',
			'DefValue' => 'Infused Edibles (prepared food and beverages)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 94,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '2',
			'DefValue' => 'Topicals (lotions, oils, salves, suppositories)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 95,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '3',
			'DefValue' => 'Concentrates (oils, distillates, shatter, rosin, etc)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 96,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '4',
			'DefValue' => 'Pre-filled Vape Cartridges'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 97,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '5',
			'DefValue' => 'Capsules/Tinctures'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 98,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Issues Matter',
			'DefValue' => 'Energy used in cultivation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 99,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Issues Matter',
			'DefOrder' => '1',
			'DefValue' => 'Disposable products like vape pens'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 100,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Issues Matter',
			'DefOrder' => '2',
			'DefValue' => 'Excessive or non-recyclable packaging'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 101,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Issues Matter',
			'DefOrder' => '3',
			'DefValue' => 'Pesticide and fertilizer use in cultivation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 106,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Notice Dispensary',
			'DefValue' => 'Sustainably grown'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 107,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Notice Dispensary',
			'DefOrder' => '1',
			'DefValue' => 'Ethically produced'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 109,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Notice Dispensary',
			'DefOrder' => '3',
			'DefValue' => 'Cultivated with organic, biodynamic, or regenerative agricultural methods'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 111,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Notice Dispensary',
			'DefOrder' => '5',
			'DefValue' => 'Budtender\'s that encourage medical patients to select organic products?'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 114,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Notice Dispensary',
			'DefOrder' => '8',
			'DefValue' => 'Other:'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 115,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'font-main',
			'DefDescription' => 'Helvetica,Arial,sans-serif'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 116,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-bg',
			'DefDescription' => '#111'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 117,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-text',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 118,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-link',
			'DefDescription' => '#FF3CC0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 119,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-grey',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 120,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faintr',
			'DefDescription' => '#000'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 121,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-on',
			'DefDescription' => '#b38a4d'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 122,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-off',
			'DefDescription' => '#ff82ce'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 123,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-on',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 124,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-off',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 125,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-on',
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 126,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-off',
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 127,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-on',
			'DefDescription' => '#FF63B1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 128,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-off',
			'DefDescription' => '#FF63B1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 129,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-on',
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 130,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-off',
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 131,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-line-hr',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 132,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-field-bg',
			'DefDescription' => '#111'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 133,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-form-text',
			'DefDescription' => '#CCC'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 134,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-bg',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 135,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-text',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 136,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-package',
			'DefDescription' => 'wikiworldorder/kindguide'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 137,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'spinner-code',
			'DefDescription' => '<img src="/kindguide/uploads/kind-loading-anim.gif" border=0 >'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 138,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-analytic',
			'DefDescription' => 'UA-23427655-1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 139,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'twitter',
			'DefDescription' => '@KindGuide420'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 140,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-partners',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 141,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-volunteers',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 142,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-company',
			'DefDescription' => 'Green B'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 143,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-website',
			'DefDescription' => 'http://gogreenb.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 144,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'login-instruct',
			'DefDescription' => 'Here you can start, finish, review, or update your business survey. Or sign up to <a href="https://www.thekind.guide/blank-page-1-1" target="_blank">invite your favorite brands to participate</a>.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 145,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'css-extra-files',
			'DefDescription' => '/* */'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 146,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'header-code',
			'DefDescription' => '<!-- -->'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 147,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'partner',
			'DefOrder' => '3',
			'DefValue' => 'Partner Member',
			'DefDescription' => 'Basic permission to pages and tools just for partners'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 148,
			'DefDatabase' => '1',
			'DefSet' => 'Style CSS',
			'DefSubset' => 'main',
			'DefDescription' => 'body, .panel { background: #111; color: #FFF; }
#mainNav { border-bottom: 1px #ff3cc0 solid; }
.slCard { box-shadow: 0 1px 4px #ff3cc0; }

.btn-primary, a.btn-primary:link, a.btn-primary:active, a.btn-primary:visited, a.btn-primary:hover,
a.btn-primary.btn-xl:link, a.btn-primary.btn-xl:active, a.btn-primary.btn-xl:visited, a.btn-primary.btn-xl:hover,
a.btn-primary.btn-lg:link, a.btn-primary.btn-lg:active, a.btn-primary.btn-lg:visited, a.btn-primary.btn-lg:hover,
a.btn-primary.btn-sm:link, a.btn-primary.btn-sm:active, a.btn-primary.btn-sm:visited, a.btn-primary.btn-sm:hover,
input[type="submit"].btn-primary, input[type="submit"].btn-primary.btn-xl, input[type="submit"].btn-primary.btn-lg, input[type="submit"].btn-primary.btn-sm {
    color: #FFF;
}
a.btn-primary:hover, a.btn-primary.btn-xl:hover, a.btn-primary.btn-lg:hover, a.btn-primary.btn-sm:hover,
input[type="submit"].btn-primary:hover, input[type="submit"].btn-primary.btn-xl:hover, input[type="submit"].btn-primary.btn-lg:hover, input[type="submit"].btn-primary.btn-sm:hover {

}

.btn-info, a.btn-info:link, a.btn-info:active, a.btn-info:visited, a.btn-info:hover,
a.btn-info.btn-xl:link, a.btn-info.btn-xl:active, a.btn-info.btn-xl:visited, a.btn-info.btn-xl:hover,
a.btn-info.btn-lg:link, a.btn-info.btn-lg:active, a.btn-info.btn-lg:visited, a.btn-info.btn-lg:hover,
a.btn-info.btn-sm:link, a.btn-info.btn-sm:active, a.btn-info.btn-sm:visited, a.btn-info.btn-sm:hover,
input[type="submit"].btn-info, input[type="submit"].btn-info.btn-xl, input[type="submit"].btn-info.btn-lg, input[type="submit"].btn-info.btn-sm {
    color: #FFF;
}
a.btn-info:hover, a.btn-info.btn-xl:hover, a.btn-info.btn-lg:hover, a.btn-info.btn-sm:hover,
input[type="submit"].btn-info:hover, input[type="submit"].btn-info.btn-xl:hover, input[type="submit"].btn-info.btn-lg:hover, input[type="submit"].btn-info.btn-sm:hover {
    color: #ff3cc0;
}

.btn-secondary, a.btn-secondary:link, a.btn-secondary:active, a.btn-secondary:visited, a.btn-secondary:hover,
a.btn-secondary.btn-xl:link, a.btn-secondary.btn-xl:active, a.btn-secondary.btn-xl:visited, a.btn-secondary.btn-xl:hover,
a.btn-secondary.btn-lg:link, a.btn-secondary.btn-lg:active, a.btn-secondary.btn-lg:visited, a.btn-secondary.btn-lg:hover,
a.btn-secondary.btn-sm:link, a.btn-secondary.btn-sm:active, a.btn-secondary.btn-sm:visited, a.btn-secondary.btn-sm:hover,
input[type="submit"].btn-secondary, input[type="submit"].btn-secondary.btn-xl, input[type="submit"].btn-secondary.btn-lg, input[type="submit"].btn-secondary.btn-sm {
    background: #000;
}
a.btn-secondary:hover, a.btn-secondary.btn-xl:hover, a.btn-secondary.btn-lg:hover, a.btn-secondary.btn-sm:hover,
input[type="submit"].btn-secondary:hover, input[type="submit"].btn-secondary.btn-xl:hover, input[type="submit"].btn-secondary.btn-lg:hover, input[type="submit"].btn-secondary.btn-sm:hover {
    background: #222;
}

.btn-danger, a.btn-danger:link, a.btn-danger:active, a.btn-danger:visited, a.btn-danger:hover,
a.btn-danger.btn-xl:link, a.btn-danger.btn-xl:active, a.btn-danger.btn-xl:visited, a.btn-danger.btn-xl:hover,
a.btn-danger.btn-lg:link, a.btn-danger.btn-lg:active, a.btn-danger.btn-lg:visited, a.btn-danger.btn-lg:hover,
a.btn-danger.btn-sm:link, a.btn-danger.btn-sm:active, a.btn-danger.btn-sm:visited, a.btn-danger.btn-sm:hover,
input[type="submit"].btn-danger, input[type="submit"].btn-danger.btn-xl, input[type="submit"].btn-danger.btn-lg, input[type="submit"].btn-danger.btn-sm {

}
a.btn-danger:hover, a.btn-danger.btn-xl:hover, a.btn-danger.btn-lg:hover, a.btn-danger.btn-sm:hover,
input[type="submit"].btn-danger:hover, input[type="submit"].btn-danger.btn-xl:hover, input[type="submit"].btn-danger.btn-lg:hover, input[type="submit"].btn-danger.btn-sm:hover {

}'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 149,
			'DefDatabase' => '1',
			'DefSet' => 'Style CSS',
			'DefSubset' => 'email',
			'DefDescription' => '/* */'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 150,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Classification',
			'DefValue' => 'Medical (diagnosed condition)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 151,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Classification',
			'DefValue' => 'Recreational'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 152,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Classification',
			'DefOrder' => '2',
			'DefValue' => 'Spiritual'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 153,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Classification',
			'DefOrder' => '3',
			'DefValue' => 'General Health and Wellness'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 154,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '6',
			'DefValue' => 'Infused Cooking/Baking Ingredients (butters, oils, sauces, etc.)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 155,
			'DefDatabase' => '1',
			'DefSubset' => 'Kinds of Cannabis Purchase',
			'DefOrder' => '7',
			'DefValue' => 'Clones and Seeds'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 156,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Method of Purchase',
			'DefOrder' => '3',
			'DefValue' => 'On Site at Dispensary'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 157,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Method of Purchase',
			'DefOrder' => '1',
			'DefValue' => 'Pre-order from Dispensary'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 158,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Method of Purchase',
			'DefOrder' => '2',
			'DefValue' => 'Delivery Service via App or Website'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 159,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-canada',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 160,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '5',
			'DefValue' => 'Media'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 161,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '6',
			'DefValue' => 'Event Management/Hosting'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 162,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '7',
			'DefValue' => 'Catering'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 163,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '9',
			'DefValue' => 'Legal'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 164,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '10',
			'DefValue' => 'Business Development'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 165,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '11',
			'DefValue' => 'Consulting'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 166,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '12',
			'DefValue' => 'Waste Management'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 167,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '13',
			'DefValue' => 'Real Estate'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 168,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '14',
			'DefValue' => 'Finance/Investments'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 169,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '15',
			'DefValue' => 'Fitness'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 170,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '16',
			'DefValue' => 'Laboratory Testing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 171,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '17',
			'DefValue' => 'Marketing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 172,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '18',
			'DefValue' => 'Packaging'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 173,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '22',
			'DefValue' => 'Other Not Listed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 174,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefValue' => 'Financial support to cannabis/drug policy related nonprofits or foundations (such as SSDP, DPA, MPP, ASA, RII, ICFA, CannaKids, Operation EVAC, MCBA, etc.)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 175,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '1',
			'DefValue' => 'Financial support to noncannabis nonprofits or foundations? (such as American Cancer Society, HRAC, SurfRider, your local Food Bank, etc.)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 176,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '2',
			'DefValue' => 'Company sponsored projects (such as food drives, toy drives, beach cleanups, expungement clinics, AIDS walks, and other company-wide volunteer efforts).'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 177,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '3',
			'DefValue' => 'Compassion programs to help support costs of medicines for patients'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 178,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '4',
			'DefValue' => 'Job training and/or hiring of formerly incarcerated individuals'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 179,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '5',
			'DefValue' => 'Financial support for employees who wish to spend time company time or resources volunteering'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 180,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '6',
			'DefValue' => 'We work with a 3rd party agency to support or verify our CSR commitment (i.e. KindColorado, B-Corps, Fair Trade USA)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 181,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '7',
			'DefValue' => 'We are by design a socially responsible business, as is evident in our hiring practices, business model, and corporate governance structure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 182,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '8',
			'DefValue' => 'We ascribe to the values of CSR as is evident in our mission statement and purpose'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 183,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '15',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 184,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Staff Time',
			'DefValue' => 'We have a Full-Time CSR person'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 185,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Staff Time',
			'DefOrder' => '1',
			'DefValue' => 'We have a Part-Time CSR person'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 186,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Staff Time',
			'DefOrder' => '2',
			'DefValue' => 'We dedicate 10+ hours monthly from various staff members to CSR activity'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 187,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Staff Time',
			'DefOrder' => '3',
			'DefValue' => 'We dedicate >10 hours monthly to CSR activity'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 188,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefValue' => 'Not interested'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 189,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '1',
			'DefValue' => 'Unable to financially support such a program'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 190,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '2',
			'DefValue' => 'Unable to dedicate staff time'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 191,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '3',
			'DefValue' => 'Our current business model does not allow for a CSR program'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 192,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '4',
			'DefValue' => 'We plan to establish a CSR program once we can commit resources to it'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 193,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '5',
			'DefValue' => 'We would be interested in receiving free assistance to establish a CSR program'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 194,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefValue' => 'We measure our environmental impacts and work to address them'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 195,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '1',
			'DefValue' => 'We use renewable energy in our operations'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 196,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '2',
			'DefValue' => 'We financially offset the environmental impacts of our operations through programs like Carbon Fund (materials, travel, etc.)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 197,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '3',
			'DefValue' => 'We have ES protocols written directly into our business plans'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 198,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '4',
			'DefValue' => 'We work with a 3rd party agency to verify our ES commitments (i.e. Clean Green, Cannabis Conservancy)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 199,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Staff Time',
			'DefValue' => 'We have a Full-Time Environmental Sustainability staff person'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 200,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Staff Time',
			'DefOrder' => '1',
			'DefValue' => 'We have a Part-Time Environmental Sustainability staff person'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 201,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Staff Time',
			'DefOrder' => '2',
			'DefValue' => 'We dedicate 10+ hours monthly from various staff members to Environmental Sustainability'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 202,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Staff Time',
			'DefOrder' => '3',
			'DefValue' => 'We dedicate >10 hours monthly to Environmental Sustainability'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 203,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefValue' => 'Not interested'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 204,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '1',
			'DefValue' => 'Unable to financially support such a program'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 205,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '2',
			'DefValue' => 'Unable to dedicate staff time'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 206,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '3',
			'DefValue' => 'Our current business model does not allow for such such a program'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 207,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '4',
			'DefValue' => 'We plan to establish an ES once we can commit resources to it'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 208,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '5',
			'DefValue' => 'We would be interested in receiving free assistance to establish an ES program'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 209,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '8',
			'DefValue' => 'Edibles'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 210,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '1',
			'DefValue' => 'Delivery'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 212,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '3',
			'DefValue' => 'Wholesale'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 213,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '19',
			'DefValue' => 'Security'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 214,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '20',
			'DefValue' => 'Construction'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 215,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Industry Sector',
			'DefOrder' => '21',
			'DefValue' => 'Transportation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 216,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '5',
			'DefValue' => 'We educate our employees about ES and actively seek their input and involvement'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 217,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '6',
			'DefValue' => 'We encourage our business partners to engage in ES efforts'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 218,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '7',
			'DefValue' => 'We stay informed on ES research as it relates to our business operations'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 219,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '8',
			'DefValue' => 'We educate our community and other cannabis businesses about ES issues'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 220,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Practices',
			'DefOrder' => '9',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 221,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '9',
			'DefValue' => 'We educate our employees about CSR and actively seek their input and involvement'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 222,
			'DefDatabase' => '1',
			'DefSubset' => 'Likelihood Scale',
			'DefOrder' => '4',
			'DefValue' => '5 - Very likely'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 223,
			'DefDatabase' => '1',
			'DefSubset' => 'Likelihood Scale',
			'DefOrder' => '3',
			'DefValue' => '4 - Somewhat Likely'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 224,
			'DefDatabase' => '1',
			'DefSubset' => 'Likelihood Scale',
			'DefOrder' => '2',
			'DefValue' => '3 - Neutral/Not Sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 225,
			'DefDatabase' => '1',
			'DefSubset' => 'Likelihood Scale',
			'DefOrder' => '1',
			'DefValue' => '2 - Somewhat Unlikely'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 226,
			'DefDatabase' => '1',
			'DefSubset' => 'Likelihood Scale',
			'DefValue' => '1 - Very Unlikely'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 227,
			'DefDatabase' => '1',
			'DefSubset' => 'Frequency Scale',
			'DefValue' => '1 - Never'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 228,
			'DefDatabase' => '1',
			'DefSubset' => 'Frequency Scale',
			'DefOrder' => '1',
			'DefValue' => '2 - Rarely'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 229,
			'DefDatabase' => '1',
			'DefSubset' => 'Frequency Scale',
			'DefOrder' => '2',
			'DefValue' => '3 - Sometimes'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 230,
			'DefDatabase' => '1',
			'DefSubset' => 'Frequency Scale',
			'DefOrder' => '3',
			'DefValue' => '4 - Often'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 231,
			'DefDatabase' => '1',
			'DefSubset' => 'Frequency Scale',
			'DefOrder' => '4',
			'DefValue' => '5 - Always'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 232,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Method of Purchase',
			'DefOrder' => '3',
			'DefValue' => 'Homegrown'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 234,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Method of Purchase',
			'DefOrder' => '4',
			'DefValue' => 'Caregiver grows for me'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 235,
			'DefDatabase' => '1',
			'DefSubset' => 'Importance Scale',
			'DefOrder' => '4',
			'DefValue' => '5 - Very important'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 236,
			'DefDatabase' => '1',
			'DefSubset' => 'Importance Scale',
			'DefOrder' => '3',
			'DefValue' => '4 - Somewhat Important'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 237,
			'DefDatabase' => '1',
			'DefSubset' => 'Importance Scale',
			'DefOrder' => '2',
			'DefValue' => '3 - Neutral/Not Sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 238,
			'DefDatabase' => '1',
			'DefSubset' => 'Importance Scale',
			'DefOrder' => '1',
			'DefValue' => '2 - Somewhat Unimportant'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 239,
			'DefDatabase' => '1',
			'DefSubset' => 'Importance Scale',
			'DefValue' => '1 - Unimportant'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 240,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefValue' => 'Some High School'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 241,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '1',
			'DefValue' => 'Completed High School'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 242,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '4',
			'DefValue' => 'Completed Undergraduate Degree'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 243,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '3',
			'DefValue' => 'Some Undergraduate Education'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 244,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '6',
			'DefValue' => 'Completed Masters degree'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 245,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '5',
			'DefValue' => 'Some graduate school education'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 246,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '7',
			'DefValue' => 'Completed Doctoral degree'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 247,
			'DefDatabase' => '1',
			'DefSubset' => 'Education Level',
			'DefOrder' => '2',
			'DefValue' => 'Completed Associates degree'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 248,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Words Interchangeable',
			'DefValue' => 'Yes'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 249,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Words Interchangeable',
			'DefOrder' => '1',
			'DefValue' => 'Sometimes'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 250,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Words Interchangeable',
			'DefOrder' => '2',
			'DefValue' => 'Never'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 251,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Words Interchangeable',
			'DefOrder' => '3',
			'DefValue' => 'No'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 252,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Words Interchangeable',
			'DefOrder' => '4',
			'DefValue' => 'Not Sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 253,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Words Interchangeable',
			'DefOrder' => '5',
			'DefValue' => 'Let me describe exactly how I use them'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 254,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefValue' => '18-24'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 255,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '1',
			'DefValue' => '25-29'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 256,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '2',
			'DefValue' => '30-34'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 257,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '3',
			'DefValue' => '35-39'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 258,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '4',
			'DefValue' => '40-44'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 259,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '5',
			'DefValue' => '45-49'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 260,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '6',
			'DefValue' => '50-54'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 261,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '7',
			'DefValue' => '55-59'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 262,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '8',
			'DefValue' => '60-64'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 263,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '9',
			'DefValue' => '65-69'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 264,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Age Ranges',
			'DefOrder' => '10',
			'DefValue' => '70+'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 265,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefValue' => 'Employee'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 266,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '1',
			'DefValue' => 'Owner'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 267,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '2',
			'DefValue' => 'Executive/Management'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 268,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '3',
			'DefValue' => 'Retail'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 269,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '4',
			'DefValue' => 'Ancillary'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 270,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '5',
			'DefValue' => 'Entrepreneur'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 271,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '6',
			'DefValue' => 'Established and licensed business'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 272,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '7',
			'DefValue' => 'Activist'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 273,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '8',
			'DefValue' => 'Advocate'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 274,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '9',
			'DefValue' => 'Patient'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 275,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '10',
			'DefValue' => 'Nonprofit'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 276,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Industry Role',
			'DefOrder' => '11',
			'DefValue' => 'Cannabis Plant Steward'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 277,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefValue' => 'BCorp'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 278,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '1',
			'DefValue' => 'Fair Trade USA'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 279,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '2',
			'DefValue' => 'LEED Certification'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 280,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '3',
			'DefValue' => 'USDA Organic Certification'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 281,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '4',
			'DefValue' => 'Rainforest Alliance'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 282,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '5',
			'DefValue' => 'Roundtable on Sustainable Palm Oil'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 283,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '6',
			'DefValue' => 'Clean Green Certification'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 284,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '7',
			'DefValue' => 'Cannabis Conservancy Certification'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 285,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '8',
			'DefValue' => 'Cannabis PowerScore'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 286,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '9',
			'DefValue' => 'Cannabis Certification Council'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 287,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '10',
			'DefValue' => 'KindColorado'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 288,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '11',
			'DefValue' => 'FOCUS Certification'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 289,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '12',
			'DefValue' => 'Carbonfund'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 290,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '13',
			'DefValue' => 'Terrapass'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 291,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '14',
			'DefValue' => 'UN Sustainable Development Goals'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 292,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '15',
			'DefValue' => 'Cage Free Cannabis'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 293,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '16',
			'DefValue' => 'Craft Cannabis Alliance'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 294,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefValue' => 'Brownie Mary'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 295,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefOrder' => '1',
			'DefValue' => 'Bob Marley'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 296,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefOrder' => '2',
			'DefValue' => 'Dennis Peron'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 297,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefOrder' => '3',
			'DefValue' => 'Willie Nelson'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 298,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefOrder' => '4',
			'DefValue' => 'Snoop Dogg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 299,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefOrder' => '5',
			'DefValue' => 'Joe Rogan'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 300,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Advocates',
			'DefOrder' => '6',
			'DefValue' => 'Jack Herer'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 301,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefValue' => 'Friends'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 302,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '1',
			'DefValue' => 'Social Media'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 303,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '2',
			'DefValue' => 'Brand Website'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 304,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '3',
			'DefValue' => 'Magazines'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 305,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '4',
			'DefValue' => 'Online Research'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 306,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '5',
			'DefValue' => 'In-Store advertising'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 307,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '6',
			'DefValue' => 'In-Store demos'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 308,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '7',
			'DefValue' => 'Brand sponsored cannabis or community event'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 309,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Brand Familiarize',
			'DefOrder' => '8',
			'DefValue' => 'Cannabis Business Directory (e.g. WeedMaps)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 310,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Employment Status',
			'DefValue' => 'Yes, full time job(s)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 311,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Employment Status',
			'DefOrder' => '1',
			'DefValue' => 'Yes, more than one part time job'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 312,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Employment Status',
			'DefOrder' => '2',
			'DefValue' => 'Yes, part time'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 313,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Employment Status',
			'DefOrder' => '3',
			'DefValue' => 'No'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 314,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Employment Status',
			'DefOrder' => '4',
			'DefValue' => 'No, I am retired'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 315,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Frequency',
			'DefValue' => 'Daily'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 316,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Frequency',
			'DefOrder' => '1',
			'DefValue' => 'Every few days'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 317,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Frequency',
			'DefOrder' => '2',
			'DefValue' => 'Weekly'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 318,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Frequency',
			'DefOrder' => '3',
			'DefValue' => 'Occasionally'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 319,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Frequency',
			'DefOrder' => '4',
			'DefValue' => 'Rarely'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 320,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Use Frequency',
			'DefOrder' => '5',
			'DefValue' => 'Never'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 321,
			'DefDatabase' => '1',
			'DefSet' => 'Tree Settings',
			'DefSubset' => 'tree-5-footer',
			'DefDescription' => '<style> .navbar, #myNavBar, #myNavBar .navbar { min-height: 61px; max-height: 61px; } .progress.progress-striped.active .progress-bar.progress-bar-striped { background: #FF63B1; } </style>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 322,
			'DefDatabase' => '1',
			'DefSet' => 'Tree Settings',
			'DefSubset' => 'tree-16-footer',
			'DefDescription' => '<style> .navbar, #myNavBar, #myNavBar .navbar { min-height: 61px; max-height: 61px; } .progress.progress-striped.active .progress-bar.progress-bar-striped { background: #FF63B1; } </style>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 323,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Survey Status',
			'DefValue' => 'Incomplete'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 324,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Survey Status',
			'DefOrder' => '1',
			'DefValue' => 'Complete'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 325,
			'DefDatabase' => '1',
			'DefSubset' => 'Business Survey Status',
			'DefOrder' => '2',
			'DefValue' => 'Confirmed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 326,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Survey Status',
			'DefValue' => 'Incomplete'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 327,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Survey Status',
			'DefOrder' => '1',
			'DefValue' => 'Complete'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 328,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '10',
			'DefValue' => 'We consult with local non governmental community development groups'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 329,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '11',
			'DefValue' => 'We host community events in our facility'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 330,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '12',
			'DefValue' => 'We look for Socially Responsible Investors'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 331,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '13',
			'DefValue' => 'We have plans for CSR programs that we will implement as soon as we can'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 332,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Practices',
			'DefOrder' => '14',
			'DefValue' => 'We would be interested in free resources to enhance our CSR efforts'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 333,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '7',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 334,
			'DefDatabase' => '1',
			'DefSubset' => 'Business CSR Why Not',
			'DefOrder' => '6',
			'DefValue' => 'Not required'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 335,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '6',
			'DefValue' => 'Not required'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 336,
			'DefDatabase' => '1',
			'DefSubset' => 'Business ES Why Not',
			'DefOrder' => '7',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 337,
			'DefDatabase' => '1',
			'DefSubset' => 'Consumer Recognize Certifications',
			'DefOrder' => '17',
			'DefValue' => 'Certified KIND'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 338,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 339,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key2',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 340,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 341,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key2',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 342,
			'DefDatabase' => '1',
			'DefSet' => 'Blurbs',
			'DefSubset' => 'Footer',
			'DefIsActive' => '3',
			'DefDescription' => '<div id="footerLinks" style="text-align: center;"><div class="container"><div class="row">
    <div class="col-md-4 taL">
    </div>
    <div class="col-md-3 taL">
    </div>
    <div class="col-md-3 taL">
    </div>
    <div class="col-md-2" id="footerSocialCol">
        </div>
</div></div></div>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 343,
			'DefDatabase' => '1',
			'DefSubset' => 'Nonprofit Tax Status',
			'DefValue' => '501(c)3 Nonprofit'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 344,
			'DefDatabase' => '1',
			'DefSubset' => 'Nonprofit Tax Status',
			'DefOrder' => '1',
			'DefValue' => 'Other / Unknown'
		]);
	

	DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Green B Main',
			'TreeRoot' => '1',
			'TreeFirstPage' => '4',
			'TreeLastPage' => '17',
			'TreeCoreTable' => '39'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Green B Main',
			'TreeCoreTable' => '39'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 5,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Consumer and Patient Survey',
			'TreeDesc' => 'This survey is anonymous. Share it far and wide, and help us #KeepItGreen!',
			'TreeRoot' => '22',
			'TreeFirstPage' => '241',
			'TreeLastPage' => '38',
			'TreeCoreTable' => '48'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 6,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Home',
			'TreeRoot' => '41'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 7,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Dashboard',
			'TreeRoot' => '43'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 8,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Volunteer',
			'TreeRoot' => '45'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 9,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Partner',
			'TreeRoot' => '47'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 10,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Staff',
			'TreeRoot' => '49'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 11,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Search',
			'TreeRoot' => '51'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 12,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Dashboard Search',
			'TreeRoot' => '53'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 13,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Volunteer Search',
			'TreeRoot' => '55'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 14,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'My Profile',
			'TreeRoot' => '57',
			'TreeFirstPage' => '57',
			'TreeLastPage' => '57'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 15,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Consumer and Patient Survey',
			'TreeRoot' => '66',
			'TreeCoreTable' => '48'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 16,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Survey',
			'TreeName' => 'Business Survey',
			'TreeRoot' => '67',
			'TreeFirstPage' => '68',
			'TreeLastPage' => '127',
			'TreeCoreTable' => '44'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 17,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Business Survey'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 18,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Page',
			'TreeName' => 'Completed Consumer Survey',
			'TreeRoot' => '245',
			'TreeFirstPage' => '245',
			'TreeLastPage' => '245',
			'TreeCoreTable' => '48'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 19,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Page',
			'TreeName' => 'Completed Business Survey',
			'TreeRoot' => '247',
			'TreeFirstPage' => '247',
			'TreeLastPage' => '247',
			'TreeCoreTable' => '44'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 20,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Page',
			'TreeName' => 'Get your business in The Kind Guide',
			'TreeRoot' => '249',
			'TreeFirstPage' => '249',
			'TreeLastPage' => '249'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 21,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Business Invite',
			'TreeRoot' => '342',
			'TreeFirstPage' => '356',
			'TreeLastPage' => '357',
			'TreeCoreTable' => '63'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 22,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Business Invite'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 23,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Page',
			'TreeName' => 'Web App Technical Specs',
			'TreeRoot' => '350',
			'TreeFirstPage' => '350',
			'TreeLastPage' => '350'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 24,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Cannabis Community Nonprofit Directory',
			'TreeRoot' => '361',
			'TreeFirstPage' => '362',
			'TreeLastPage' => '374',
			'TreeCoreTable' => '64'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 25,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Cannabis Community Nonprofit Directory'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 26,
			'TreeDatabase' => '1',
			'TreeUser' => '2',
			'TreeType' => 'Page',
			'TreeName' => 'Cannabis Community Nonprofit Directory',
			'TreeRoot' => '369',
			'TreeFirstPage' => '369',
			'TreeLastPage' => '369'
		]);
	
	DB::table('SL_Node')->insert([
			'NodeID' => 1,
			'NodeTree' => '1',
			'NodeType' => 'Data Manip: New',
			'NodePromptText' => 'Green B Reporting',
			'NodePromptNotes' => 'log-history',
			'NodeDataBranch' => 'Book'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2,
			'NodeTree' => '1',
			'NodeParentID' => '1',
			'NodeType' => 'Loop Root',
			'NodePromptText' => '<h2 class="OPCblueDark">Your Green B History</h2>
Below is the complete history of all the energy usage and other externalities you have logged.',
			'NodePromptNotes' => 'log-history',
			'NodeDataBranch' => 'Log Items'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What would you like to log right now?',
			'NodeResponseSet' => 'Definition::Log Entry Type',
			'NodeDataStore' => 'Items:ItItemType',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 4,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'what-type-of-log-entry-is-this'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 5,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeParentOrder' => '1',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => 'You can add Tags to this entry, if you like:'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 6,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'You can name this entry, if you like:',
			'NodeDataStore' => 'Items:ItName'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 7,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Transportation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 8,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '4',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Digital Things Used'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 9,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Physical Things Purchased'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 10,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '5',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Cannabis Things'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 11,
			'NodeTree' => '1',
			'NodeParentID' => '7',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'transportation-log-type'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 12,
			'NodeTree' => '1',
			'NodeParentID' => '14',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'lodging-log-type'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 13,
			'NodeTree' => '1',
			'NodeParentID' => '11',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What type of travel are you logging right now?',
			'NodeResponseSet' => 'Definition::Transportation Types'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 14,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Travel Lodging',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 15,
			'NodeTree' => '1',
			'NodeParentID' => '9',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'physical-log-type',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 16,
			'NodeTree' => '1',
			'NodeParentID' => '8',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'digital-log-type',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 17,
			'NodeTree' => '1',
			'NodeParentID' => '10',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'cannabis-log-type',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 18,
			'NodeTree' => '1',
			'NodeParentID' => '7',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'transportation-more-info'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 19,
			'NodeTree' => '1',
			'NodeParentID' => '7',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'transportation-distance'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 22,
			'NodeTree' => '5',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'ConsumerSurvey'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 23,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'your-behavior',
			'NodePromptAfter' => 'About You::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 24,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'How would you describe your cannabis use? Check all that apply.',
			'NodeResponseSet' => 'Definition::Consumer Use Classification',
			'NodeDataStore' => 'ConsumerUse:ConUseUseID',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 25,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'How often do you use cannabis?',
			'NodeResponseSet' => 'Definition::Consumer Use Frequency',
			'NodeDataStore' => 'ConsumerSurvey:ConHowOften',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 26,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '3',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What kinds of cannabis products do you normally purchase? Check all that apply.',
			'NodeResponseSet' => 'Definition::Kinds of Cannabis Purchase',
			'NodeDataStore' => 'ConsumerPurchase:ConPurchWhatKinds',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 35,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you currently a student?',
			'NodeDataStore' => 'ConsumerSurvey:ConStudent',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 36,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you currently employed?',
			'NodeResponseSet' => 'Definition::Consumer Employment Status',
			'NodeDataStore' => 'ConsumerSurvey:ConEmployed',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 38,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeParentOrder' => '6',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'thank-you',
			'NodeOpts' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 39,
			'NodeTree' => '5',
			'NodeParentID' => '38',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1>Thank you for participating in <nobr>The Kind Guide</nobr> Consumer Survey!</h1><p><br></p><h3 class="clrLnk">Invite your friends to help inform the new industry:<p></p><p>&nbsp;</p></h3></center>',
			'NodePromptAfter' => '<style> #sessMgmtWrap { display: none; } </style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 40,
			'NodeTree' => '5',
			'NodeParentID' => '241',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<br>
<h2 style="text-align: center; ">The Kind Guide Consumer Survey</h2>
<p><br></p><p>This anonymous survey collects information on cannabis consumer behavior. Not all questions are mandatory, so skip any you want.</p><p>There are 3 survey sections, each one takes 5-8 minutes to complete. You can save your responses and exit any section of the survey at any time.</p><p><b>REMEMBER:</b> This survey is completely anonymous. It is not a test! Don\'t overthink your responses, but answer honestly, and be sure to follow <a href="http://thekind.guide" target="_blank">The Kind Guide</a> for more info on Conscious Capitalism and Corporate Social Responsibility in the cannabis industry.</p><p><br></p>',
			'NodePromptAfter' => '<script type="text/javascript"> setTimeout("document.getElementById(\'nFormNextBtn\').innerHTML=\'Start Survey\'", 10); </script>
<style> #sessMgmtWrap { display: none; } </style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 41,
			'NodeTree' => '6',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'home'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 42,
			'NodeTree' => '6',
			'NodeParentID' => '41',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 43,
			'NodeTree' => '7',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'dashboard'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 44,
			'NodeTree' => '7',
			'NodeParentID' => '43',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 45,
			'NodeTree' => '8',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'volunteer'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 46,
			'NodeTree' => '8',
			'NodeParentID' => '45',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 47,
			'NodeTree' => '9',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'partner'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 48,
			'NodeTree' => '9',
			'NodeParentID' => '47',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 49,
			'NodeTree' => '10',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'staff'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 50,
			'NodeTree' => '10',
			'NodeParentID' => '49',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 51,
			'NodeTree' => '11',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 52,
			'NodeTree' => '11',
			'NodeParentID' => '51',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 53,
			'NodeTree' => '12',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 54,
			'NodeTree' => '12',
			'NodeParentID' => '53',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 55,
			'NodeTree' => '13',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'volun-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 56,
			'NodeTree' => '13',
			'NodeParentID' => '55',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 57,
			'NodeTree' => '14',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'my-profile',
			'NodePromptAfter' => 'My Profile::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 58,
			'NodeTree' => '14',
			'NodeParentID' => '57',
			'NodeType' => 'Member Profile Basics'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 59,
			'NodeTree' => '14',
			'NodeParentID' => '57',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 60,
			'NodeTree' => '14',
			'NodeParentID' => '59',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '7'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 61,
			'NodeTree' => '14',
			'NodeParentID' => '59',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 62,
			'NodeTree' => '14',
			'NodeParentID' => '59',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 63,
			'NodeTree' => '14',
			'NodeParentID' => '360',
			'NodeType' => 'Search Results',
			'NodePromptText' => '<h2>Your Business Invites</h2>',
			'NodeResponseSet' => '21',
			'NodeDataBranch' => 'BusinessInvites'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 64,
			'NodeTree' => '14',
			'NodeParentID' => '360',
			'NodeParentOrder' => '1',
			'NodeType' => 'Incomplete Sess Check',
			'NodeResponseSet' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 66,
			'NodeTree' => '15',
			'NodeType' => 'XML',
			'NodePromptText' => 'ConsumerSurvey',
			'NodePromptNotes' => '48'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 67,
			'NodeTree' => '16',
			'NodeType' => 'Data Manip: Update',
			'NodeResponseSet' => '323',
			'NodeDataBranch' => 'Business',
			'NodeDataStore' => 'Business:BusStatus'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 68,
			'NodeTree' => '16',
			'NodeParentID' => '67',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'keep-it-green',
			'NodePromptAfter' => 'Business Survey::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 69,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Business Name',
			'NodeDataStore' => 'Business:BusName',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 70,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '9',
			'NodeType' => 'U.S. States',
			'NodePromptText' => 'Primary State of Operation',
			'NodeDataStore' => 'Business:BusState',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 71,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '8',
			'NodeType' => 'Text',
			'NodePromptText' => 'Zip Code',
			'NodeDataStore' => 'Business:BusZipCode',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 72,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '12',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'How would you classify your business? Please check all that apply.',
			'NodeResponseSet' => 'Definition::Business Industry Sector',
			'NodeDataStore' => 'BusinessSectors:BusSectSector',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 74,
			'NodeTree' => '16',
			'NodeParentID' => '77',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Certified Organic?',
			'NodeDataStore' => 'Business:BusOrganic'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 75,
			'NodeTree' => '16',
			'NodeParentID' => '77',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Clean Green Certified?',
			'NodeDataStore' => 'Business:BusCleanGreen'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 76,
			'NodeTree' => '16',
			'NodeParentID' => '77',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Fair Trade Certified?',
			'NodeDataStore' => 'Business:BusFairTrade'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 78,
			'NodeTree' => '5',
			'NodeParentID' => '79',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<h3>Consumer Observations</h3>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 79,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'observations',
			'NodePromptAfter' => 'Consumer Observations::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 80,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '2',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'How do you access cannabis? Check all that apply.',
			'NodeResponseSet' => 'Definition::Consumer Method of Purchase',
			'NodeDataStore' => 'ConsumerAccess:ComAccAccess',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 84,
			'NodeTree' => '5',
			'NodeParentID' => '81',
			'NodeType' => 'Text',
			'NodePromptText' => 'New Question!'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 85,
			'NodeTree' => '5',
			'NodeParentID' => '82',
			'NodeType' => 'Text',
			'NodePromptText' => 'New question for delivery'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 86,
			'NodeTree' => '5',
			'NodeParentID' => '83',
			'NodeType' => 'Text',
			'NodePromptText' => 'Smell Yourself!'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 87,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you operate in multiple states? (Y/N)',
			'NodeDataStore' => 'Business:BusMultipleStates',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 88,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'First Name',
			'NodeDataStore' => 'Business:BusFirstName',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 90,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Last Name',
			'NodeDataStore' => 'Business:BusLastName',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 91,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '6',
			'NodeType' => 'Email',
			'NodePromptText' => 'Email Contact (all of your responses will be emailed to you upon completion of survey)',
			'NodeDataStore' => 'Business:BusEmail',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 93,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '14',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Corporate Social Responsibility is?',
			'NodeDataStore' => 'Business:BusKnowCsr',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 94,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '15',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Environmental Sustainability is?',
			'NodeDataStore' => 'Business:BusKnowEs',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 95,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '16',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Environmental, Social, & Governance reporting is?',
			'NodeDataStore' => 'Business:BusKnowEsgReporting',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 96,
			'NodeTree' => '16',
			'NodeParentID' => '119',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => 'Corporate Social Responsibility (CSR) is a business practice intended to help companies manage their social capital as well as their economic capital. CSR is often described as a business practice that addresses the "triple bottom line" of "people, profit, and planet." These next questions are designed to help us understand how your company is managing the social impacts of your business among all stakeholders.'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 97,
			'NodeTree' => '16',
			'NodeParentID' => '119',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Does your company currently practice CSR?',
			'NodeDataStore' => 'Business:BusCurrentCsr',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 98,
			'NodeTree' => '16',
			'NodeParentID' => '97',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'How does your company practice CSR?',
			'NodeResponseSet' => 'Definition::Business CSR Practices',
			'NodeDataStore' => 'BusinessCSR:BusCsrPractice',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 99,
			'NodeTree' => '16',
			'NodeParentID' => '119',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Does your company currently have an ongoing Corporate Social Responsibility program in place, with staff time dedicated to managing its operations and effectiveness?',
			'NodeDataStore' => 'Business:BusCurrentCsrProgram',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 100,
			'NodeTree' => '16',
			'NodeParentID' => '99',
			'NodeType' => 'Radio',
			'NodePromptText' => 'How much estimated staff time is dedicated to CSR efforts?',
			'NodeResponseSet' => 'Definition::Business CSR Staff Time',
			'NodeDataStore' => 'Business:BusCurrentCsrStaffTime',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 101,
			'NodeTree' => '16',
			'NodeParentID' => '99',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Why not? (check all that apply)',
			'NodeResponseSet' => 'Definition::Business CSR Why Not',
			'NodeDataStore' => 'BusinessNotCSR:BusCsrNotReason',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 102,
			'NodeTree' => '16',
			'NodeParentID' => '98',
			'NodeType' => 'Text',
			'NodePromptText' => 'Other, please describe',
			'NodeDataStore' => 'Business:BusCurrentCsrOther'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 103,
			'NodeTree' => '16',
			'NodeParentID' => '120',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => 'Environmental Sustainability is one measure of Corporate Social Responsibility. It characterizes the responsible interaction with our environment to avoid depletion or degradation of natural resources while allowing for long-term environmental quality for future generations. 

The following questions help inform us what your business specifically is doing to enhance Environmental Sustainability.'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 104,
			'NodeTree' => '16',
			'NodeParentID' => '120',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Does your company currently practice Environmental Sustainability?',
			'NodeDataStore' => 'Business:BusCurrentEs',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 105,
			'NodeTree' => '16',
			'NodeParentID' => '104',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Why not? (Check all that apply)',
			'NodeResponseSet' => 'Definition::Business ES Why Not',
			'NodeDataStore' => 'BusinessNotES:BusEsNotReason',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 106,
			'NodeTree' => '16',
			'NodeParentID' => '110',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'How much time do you dedicate to Environmental Sustainability efforts?',
			'NodeResponseSet' => 'Definition::Business ES Staff Time',
			'NodeDataStore' => 'Business:BusCurrentEsStaffTime',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 107,
			'NodeTree' => '16',
			'NodeParentID' => '110',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'How does your company practice Environmental Sustainability?',
			'NodeResponseSet' => 'Definition::Business ES Practices',
			'NodeDataStore' => 'BusinessES:BusEsPractice',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 108,
			'NodeTree' => '16',
			'NodeParentID' => '87',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Please indicate which additional states you operate in',
			'NodeResponseSet' => 'Definition::--STATES--',
			'NodeDataStore' => 'BusinessStates:BusStatState'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 109,
			'NodeTree' => '16',
			'NodeParentID' => '72',
			'NodeType' => 'Text',
			'NodePromptText' => 'Other',
			'NodeDataStore' => 'Business:BusSectorOther',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 110,
			'NodeTree' => '16',
			'NodeParentID' => '104',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 111,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Title or Position',
			'NodeDataStore' => 'Business:BusTitle',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 112,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '17',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Has an investor ever inquired about your Corporate Social Responsibility efforts?',
			'NodeDataStore' => 'Business:BusInvestorAskCsr',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 113,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '18',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Has an investor ever inquired about your Environmental Sustainability efforts?',
			'NodeDataStore' => 'Business:BusInvestorAskEs',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 114,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '19',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you required to participate in Corporate Social Responsibility as a condition for obtaining a license to operate a cannabis related business?',
			'NodeDataStore' => 'Business:BusRequiredCsr',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 115,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '20',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you required to demonstrate an Environmental Sustainability Plan as a condition for obtaining a license to operate a cannabis related business?',
			'NodeDataStore' => 'Business:BusRequiredEsp',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 116,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>The Kind Guide Business Survey</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 117,
			'NodeTree' => '16',
			'NodeParentID' => '121',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you like to publicly share information about your survey responses with consumers and clients via The Kind Guide Web App?',
			'NodePromptNotes' => 'We will never publish or share any contact information, etc.',
			'NodeDataStore' => 'Business:BusPublic'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 118,
			'NodeTree' => '16',
			'NodeParentID' => '117',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you like your CSR or ES efforts, programs, or products to be featured on The Kind Guide Web App?',
			'NodeDataStore' => 'Business:BusPublicFeatured'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 119,
			'NodeTree' => '16',
			'NodeParentID' => '67',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'business-survey-csr-details',
			'NodePromptAfter' => 'Business Survey CSR Details::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 120,
			'NodeTree' => '16',
			'NodeParentID' => '67',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'business-survey-es-details',
			'NodePromptAfter' => 'Business Survey ES Details::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 121,
			'NodeTree' => '16',
			'NodeParentID' => '67',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'business-survey-share-details',
			'NodePromptAfter' => 'Business Survey Share Details::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 122,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'Phone Number',
			'NodeDataStore' => 'Business:BusPhone',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 123,
			'NodeTree' => '16',
			'NodeParentID' => '107',
			'NodeType' => 'Text',
			'NodePromptText' => 'Other, please describe',
			'NodeDataStore' => 'Business:BusEsOther'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 124,
			'NodeTree' => '16',
			'NodeParentID' => '120',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div style="text-align: center;"><b>ENVIRONMENTAL SUSTAINABILITY SECTION</b></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 125,
			'NodeTree' => '16',
			'NodeParentID' => '119',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div style="text-align: center;"><b>CORPORATE SOCIAL RESPONSIBILITY SECTION</b></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 126,
			'NodeTree' => '16',
			'NodeParentID' => '121',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div style="text-align: center;"><b>PARTICIPATION INFORMATION</b></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 127,
			'NodeTree' => '16',
			'NodeParentID' => '67',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'business-survey-completed',
			'NodePromptAfter' => 'Business Survey Completed::M::::M::::M::',
			'NodeOpts' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 128,
			'NodeTree' => '16',
			'NodeParentID' => '127',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p style="text-align: center;"><b>Thank you for your participation in The Kind Guide! </b></p><p style="text-align: center;">This small step will have incredible impacts on the future of the cannabis industry.
</p><p style="text-align: center;">You will receive a copy of your responses at the email address you provided. Please direct any questions you may have through The Kind Guide website. Once we have verified your participation, it will be noted in our public database.<br></p>
<p><br></p>
<p style="text-align: center;"><a class="btn btn-default btn-lg" href="/completed-business-survey/read-[[coreID]]">See My Completed Survey</a></p>
<p><br></p>
<p style="text-align: center;"><a class="btn btn-primary btn-lg" href="/see-whos-kind">See Who\'s Kind</a></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 129,
			'NodeTree' => '16',
			'NodeParentID' => '121',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you like free support in establishing or managing a CSR or ES program?',
			'NodeDataStore' => 'Business:BusFreeSupport'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 130,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '13',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Conscious Capitalism is?',
			'NodeDataStore' => 'Business:BusKnowCc',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 132,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text:Number',
			'NodePromptText' => 'Zip Code:',
			'NodeDataStore' => 'ConsumerSurvey:ConZip',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 133,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '13',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you work in or do you have clients in the cannabis industry?',
			'NodeDataStore' => 'ConsumerSurvey:ConIndustryWork',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 134,
			'NodeTree' => '5',
			'NodeParentID' => '240',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Describe your role in the cannabis industry. Check all that apply.',
			'NodeResponseSet' => 'Definition::Consumer Industry Role',
			'NodeDataStore' => 'ConsumerRoles:ConRolsRole',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 135,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Age',
			'NodeResponseSet' => 'Definition::Consumer Age Ranges',
			'NodeDataStore' => 'ConsumerSurvey:ConAge',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 136,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Will you answer questions about your demographic information? You may skip any you do not wish to answer.',
			'NodeDataStore' => 'ConsumerSurvey:ConDemographic',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 137,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'How do you describe your gender?',
			'NodeDataStore' => 'ConsumerSurvey:ConGender'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 138,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What is your current education level?',
			'NodeResponseSet' => 'Definition::Education Level',
			'NodeDataStore' => 'ConsumerSurvey:ConEducation',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 139,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you a parent?',
			'NodeDataStore' => 'ConsumerSurvey:ConParent',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 140,
			'NodeTree' => '5',
			'NodeParentID' => '139',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you have adult (18+) children?',
			'NodeDataStore' => 'ConsumerSurvey:ConParentOfAdult',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 141,
			'NodeTree' => '5',
			'NodeParentID' => '140',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you consume cannabis with your adult (18+) children?',
			'NodeDataStore' => 'ConsumerSurvey:ConParentConsumer',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 142,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '15',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Corporate Social Responsibility (CSR) is?',
			'NodeDataStore' => 'ConsumerSurvey:ConKnowCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 143,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '14',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Conscious Capitalism is?',
			'NodeDataStore' => 'ConsumerSurvey:ConKnowCc',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 144,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '16',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what Environmental Sustainability (ES) is?',
			'NodeDataStore' => 'ConsumerSurvey:ConKnowEs',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 145,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '17',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Please indicate which of these you are familiar with:',
			'NodeResponseSet' => 'Definition::Consumer Recognize Certifications',
			'NodeDataStore' => 'ConsumerCertifications:ConCertCertification'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 146,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'cannabis-relationship',
			'NodePromptAfter' => 'Your Relationship to Cannabis::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 147,
			'NodeTree' => '5',
			'NodeParentID' => '240',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Describe which sector of the industry you work in. Check all that apply.',
			'NodeResponseSet' => 'Definition::Business Industry Sector',
			'NodeDataStore' => 'ConsumerSectors:ConSectSector'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 148,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you or is someone you know a member of the disability community?',
			'NodeDataStore' => 'ConsumerSurvey:ConDisabilityCommunity',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 149,
			'NodeTree' => '5',
			'NodeParentID' => '239',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do accessibility issues impact your/their ability to acquire cannabis?',
			'NodeDataStore' => 'ConsumerSurvey:ConAccessibilityImpacts',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 150,
			'NodeTree' => '5',
			'NodeParentID' => '149',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'How is your accessibility impacted? (Such as: Regulations? Packaging? Affordability? Access to dispensary services? Opportunity to participate fully at events)',
			'NodeDataStore' => 'ConsumerSurvey:ConAccessibilityHow'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 151,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you use cannabis in social settings?',
			'NodeDataStore' => 'ConsumerSurvey:ConUseSocial',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 152,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you use cannabis with family members?',
			'NodeDataStore' => 'ConsumerSurvey:ConUseFamily',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 153,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '7',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you introduce people to cannabis?',
			'NodeDataStore' => 'ConsumerSurvey:ConUseIntroduce',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 154,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you use cannabis in nature (e.g. hiking, gardening)',
			'NodeDataStore' => 'ConsumerSurvey:ConUseNature',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 155,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Is cannabis part of your social identity?',
			'NodeDataStore' => 'ConsumerSurvey:ConIdentitySocial',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 156,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Is cannabis part of your personal identity?',
			'NodeDataStore' => 'ConsumerSurvey:ConIdentityPersonal',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 157,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Is cannabis part of your political identity?',
			'NodeDataStore' => 'ConsumerSurvey:ConIdentityPolitical',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 158,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you use the words "cannabis" and "marijuana" interchangeably?',
			'NodeResponseSet' => 'Definition::Consumer Words Interchangeable',
			'NodeDataStore' => 'ConsumerSurvey:ConWords',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 159,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '15',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you familiar with cannabis plant biology?',
			'NodeDataStore' => 'ConsumerSurvey:ConBiology',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 160,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '16',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you familiar with human physiology and the pharmacological effects of cannabis on the human body?',
			'NodeDataStore' => 'ConsumerSurvey:ConBiologyBody',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 161,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '17',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know what the endocannabinoid system is?',
			'NodeDataStore' => 'ConsumerSurvey:ConBiologyEndo',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 162,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '20',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'How do you familiarize yourself with cannabis brands? Check all that apply.',
			'NodeResponseSet' => 'Definition::Consumer Brand Familiarize',
			'NodeDataStore' => 'ConsumerBrand:ConBrnFamiliarize',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 163,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Likelihood of...</h2>

<h3 id="fixedHeader" style="padding-top: 20px; padding-right: 20px; width: 1155px;">For the following questions, please indicate how likely you are to take the action described:</h3>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 164,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Investigate a cannabis company\'s claims about Corporate Social Responsibility?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyInvestigateCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 165,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Make a decision to purchase cannabis products based on what you know about a brands CSR efforts?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyPurchaseCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 166,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Visit a dispensary because of their commitment to CSR in the community?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyDispensCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 167,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '7',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Tell others about good cannabis brands?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandsTellGood',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 168,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Share products from your favorite cannabis brands with others?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandShare',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 169,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Tell others about bad cannabis brands?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandsTellBad',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 170,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '12',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Ask a friend for recommendations before purchasing?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyPurchaseAsk',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 171,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '13',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Ask a budtender, on-site nurse, or physician for recommendations?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyPurchaseAskExpert',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 172,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '14',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Consider marketing when making a purchase?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyPurchaseMarketing',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 173,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '16',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Ask a budtender questions about a product?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyProductBudtend',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 174,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'preferences',
			'NodePromptAfter' => 'Consumer Preferences::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 175,
			'NodeTree' => '5',
			'NodeParentID' => '174',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Preferences</h2>

<h3 id="fixedHeader" style="padding-top: 20px; padding-right: 20px; width: 1155px;">For the following questions, please indicate how important each description is in convincing you that a brand is socially responsible:</h3>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 176,
			'NodeTree' => '5',
			'NodeParentID' => '79',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 id="fixedHeader" style="padding-top: 20px; padding-right: 20px; width: 801px;">For the following questions please consider your experience shopping for cannabis. How often do you observe:</h3>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 177,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Brands that advertise their commitment to Corporate Social Responsibility?',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenBrandAdCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 178,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Brands that practice Corporate Social Responsibility?',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenBrandPracticeCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 179,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Brands that market themselves as socially responsible or environmentally sustainable?',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenBrandsResponsible',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 180,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever worked as an intern for a company or nonprofit within the cannabis industry?',
			'NodeDataStore' => 'ConsumerSurvey:ConInterned',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 181,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '11',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever volunteered or completed a work-trade type agreement to participate in cannabis industry or cannabis community event of any kind?',
			'NodeDataStore' => 'ConsumerSurvey:ConEventVolunteer',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 182,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '7',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever attended a cannabis industry trade show, conference, or event?',
			'NodeDataStore' => 'ConsumerSurvey:ConTradeShow',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 183,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever attended a cannabis community festival, cup, or competition?',
			'NodeDataStore' => 'ConsumerSurvey:ConFestival',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 184,
			'NodeTree' => '5',
			'NodeParentID' => '180',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was your internship paid in dollars (as opposed to other non-financial benefits)?',
			'NodeDataStore' => 'ConsumerSurvey:ConInternPaid',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 185,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever observed a Certified Green or Carbon Neutral cannabis event?',
			'NodeDataStore' => 'ConsumerSurvey:ConEventGreen',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 186,
			'NodeTree' => '5',
			'NodeParentID' => '193',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever observed an event, trade show, or conference advertising accessibility commitments, such as offers to hire translators or interpreters for attendees requiring disability services?'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 187,
			'NodeTree' => '5',
			'NodeParentID' => '133',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever worked in the cannabis industry?',
			'NodeDataStore' => 'ConsumerSurvey:ConIndustryEver',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 188,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '11',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you familiar with the history of marijuana prohibition?',
			'NodeDataStore' => 'ConsumerSurvey:ConHistory',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 189,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '12',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever lobbied an elected official or submitted testimony on issues of marijuana policy reform?',
			'NodeDataStore' => 'ConsumerSurvey:ConSupportLobbied',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 190,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '13',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever financially supported organizations that have lobbied an elected official or submitted testimony on issues of marijuana policy reform?',
			'NodeDataStore' => 'ConsumerSurvey:ConSupportDonate',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 191,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '14',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever volunteered or worked on marijuana policy reform directly at the local or federal level?',
			'NodeDataStore' => 'ConsumerSurvey:ConSupportVolunteer',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 192,
			'NodeTree' => '5',
			'NodeParentID' => '158',
			'NodeType' => 'Text',
			'NodePromptText' => 'Define your terms here:',
			'NodeDataStore' => 'ConsumerSurvey:ConWordsDefine',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 194,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever observed a community or industry event advertising accessibility commitments, such as offers to hire translators or interpreters for attendees requiring disability services?',
			'NodeDataStore' => 'ConsumerSurvey:ConEventAccessibile',
			'NodeOpts' => '79'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 195,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '18',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you consider yourself a part of the cannabis community?',
			'NodeDataStore' => 'ConsumerSurvey:ConCommunity',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 196,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '19',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Select which marijuana advocates you recognize below:',
			'NodeResponseSet' => 'Definition::Consumer Recognize Advocates',
			'NodeDataStore' => 'ConsumerAdvocates:ConAdvAdvocate'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 197,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Organic, all-natural, synthetic chemical free products',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpProductOrganic',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 198,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Certified organic labeling',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpCertOrganic',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 199,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Member of cannabis trade organization (e.g. National Cannabis Industry Association, National Cannabis Bar Association)',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpTradeMember',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 200,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Length of time company or founders have spent working in the cannabis industry',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpIndustryHowLong',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 201,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '7',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Length of time business or founders have been working on marijuana policy reform issues',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpPolicyHowLong',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 202,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Character and leadership of executive team and co-founders',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpLeadership',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 203,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Employee satisfaction and retention',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpEmployees',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 204,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Evidence of fair labor practices',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpFairEvidence',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 205,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Claims of fair-labor practices',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpFairLabor',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 206,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Branding/marketing that signifies eco-friendly product',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpMarketingEco',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 207,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '12',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Branding/marketing that signifies CSR commitments',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpMarketingCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 208,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '11',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Evidence of action toward Environmental Sustainability',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpEvidenceEs',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 209,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '14',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Evidence of action towards Corporate Social Responsibility',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpEvidenceCsr',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 210,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '15',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Philanthropic donations to large mainstream charities (e.g. American Cancer Society)',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpDonateCharity',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 211,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '16',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Direct contributions to local community nonprofits',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpDonateLocal',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 212,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '13',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Company is a social business or holds a Benefit Corporation tax-status',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpSocialBus',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 213,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '19',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Support to Drug War or criminal justice reform nonprofit organizations',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpSupportNonprofits',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 214,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '18',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Sponsoring local cannabis community events',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpLocalEvents',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 215,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '22',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Company is a co-op or employee owned',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpCoops',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 216,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '23',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Company engages all stakeholders (employees, community, executive management) in their corporate social responsibility process',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpEngagesAll',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 217,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'likelihood',
			'NodePromptAfter' => 'Consumer Likelihood Of...::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 218,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Buy a product because it is created or endorsed by a celebrity?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyProductCeleb',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 219,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Boycott a brand based upon evidence of misconduct or harassment?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandBoycott',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 220,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Encourage others to boycott a brand based upon misconduct?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandTellBoycott',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 221,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '15',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Ask no questions when making a purchase?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyPurchaseAskNone',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 222,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '11',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Look for eco-friendly brands?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandsEco',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 223,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Dispensaries that offer vape pen recycling',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenDispensVapeRec',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 224,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Dispensaries that offer compassion programs for medical patients',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenDispensCompassion',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 225,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Dispensaries that host community events',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenDispensEvents',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 226,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '7',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Free educational classes hosted by cannabis businesses',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenClasses',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 227,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Buy a product because it is endorsed by a nonprofit or community coalition?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyProductNonprofit',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 228,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Sustainable packaging design',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenPackaging',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 229,
			'NodeTree' => '5',
			'NodeParentID' => '176',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Products marketed as biodynamic or sustainable',
			'NodeResponseSet' => 'Definition::Frequency Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConOftenProducts',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 230,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '18',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Spend time browsing and shopping while at a dispensary?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyDispensBrowse',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 231,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '17',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Buy a new product you\'ve never tried?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyPurchaseNew',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 232,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '19',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Support a brand known for being socially responsible?',
			'NodeResponseSet' => 'Definition::Likelihood Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConLklyBrandRespons',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 233,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Customer service experience',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpService',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 234,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '21',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Hiring of formerly incarcerated individuals',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpHireIncarcerated',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 235,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '17',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Locally owned business',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpLocalOwned',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 236,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '25',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Company publishes annual community benefit report',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpAnnualBenefit',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 237,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '24',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Company dedicates staff time and resources to social responsibility efforts',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpStaffTimeRespons',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 238,
			'NodeTree' => '5',
			'NodeParentID' => '175',
			'NodeParentOrder' => '20',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Company manages an efficient and impactful community engagement plan',
			'NodeResponseSet' => 'Definition::Importance Scale',
			'NodeDataStore' => 'ConsumerSurvey:ConImpCommunityEngage',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 239,
			'NodeTree' => '5',
			'NodeParentID' => '136',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 240,
			'NodeTree' => '5',
			'NodeParentID' => '133',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 241,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'welcome',
			'NodePromptAfter' => 'Welcome to the Consumer and Patient Survey::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 242,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>About You</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 243,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '1',
			'NodeType' => 'Email',
			'NodePromptText' => 'Email Address',
			'NodeDataStore' => 'ConsumerSurvey:ConEmail'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 244,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Your Relationship to Cannabis</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 245,
			'NodeTree' => '18',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'completed-consumer-survey',
			'NodePromptAfter' => 'Completed Consumer Survey::M::::M::::M::',
			'NodeResponseSet' => '5',
			'NodeDataBranch' => 'ConsumerSurvey',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 246,
			'NodeTree' => '18',
			'NodeParentID' => '245',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Welcome to Completed Consumer Survey.</h2>
<p>Edit this node to fill in your page! This node could be your entire page, or just one little component.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 247,
			'NodeTree' => '19',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'completed-business-survey',
			'NodePromptAfter' => 'Completed Business Survey::M::::M::::M::',
			'NodeResponseSet' => '16',
			'NodeDataBranch' => 'Business',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 248,
			'NodeTree' => '19',
			'NodeParentID' => '324',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><br></p>
<p>The Kind Guide: Business Survey<br></p>',
			'NodePromptAfter' => '<style>
#hidivBtn265 { display: none; }
#node331kids { font-size: 26pt; }
</style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 249,
			'NodeTree' => '20',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'kind-business-survey',
			'NodePromptAfter' => 'Get your business in The Kind Guide::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 250,
			'NodeTree' => '20',
			'NodeParentID' => '252',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><br></p>
<h2>Welcome to The Kind Guide Business Survey!</h2>
<p><br></p><p>You have been invited to participate by a consumer or client. On average, this 10-15 question survey can be completed in 10 minutes or less. Additionally, you may request a phone survey by contacting us here.
</p><p>
As you read in your invitation email, The Kind Guide is designed to catalyze socially responsible businesses in the cannabis industry. As a business, you can participate by helping us gather data on Corporate Social Responsibility and Environmental Sustainability efforts in this rapidly growing marketplace. While this data is widespread and common outside of the cannabis industry, there is currently no data collected on these issues within the cannabis industry. </p><p>
We encourage you to publicly share your responses via The Kind Guide Web App, but of your answers will remain anonymous unless you explicitly indicate otherwise. The aggregate data, and the status of your participation, will be made publicly available. 

Upon completion of this survey, you will immediately receive a copy of your responses and be entered into a raffle prize drawing. For more information on our Privacy Policy, the benefits of participation, and our current raffle prize, please check out our FAQs or contact us via The Kind Guide website.</p><p>
THANK YOU FOR PARTICIPATING! We look forward to building a post-prohibition future with you.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 251,
			'NodeTree' => '20',
			'NodeParentID' => '249',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 252,
			'NodeTree' => '20',
			'NodeParentID' => '251',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '7'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 253,
			'NodeTree' => '20',
			'NodeParentID' => '251',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 254,
			'NodeTree' => '20',
			'NodeParentID' => '251',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 255,
			'NodeTree' => '20',
			'NodeParentID' => '254',
			'NodeParentOrder' => '1',
			'NodeType' => 'Big Button',
			'NodeResponseSet' => 'Primary',
			'NodeDefault' => 'Enter Access Code',
			'NodeDataStore' => 'javascript:;',
			'NodeOpts' => '43'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 256,
			'NodeTree' => '20',
			'NodeParentID' => '254',
			'NodeParentOrder' => '2',
			'NodeType' => 'Big Button',
			'NodeResponseSet' => 'Primary',
			'NodeDefault' => 'Request Access Code',
			'NodeDataStore' => 'javascript:;',
			'NodeOpts' => '43'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 257,
			'NodeTree' => '20',
			'NodeParentID' => '259',
			'NodeType' => 'Big Button',
			'NodeResponseSet' => 'Default',
			'NodeDefault' => 'Test Drive Business Survey',
			'NodeDataStore' => 'javascript:;',
			'NodeOpts' => '43'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 258,
			'NodeTree' => '20',
			'NodeParentID' => '254',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><br></p>
<p>You will need an access code sent to an email address associated with the business.<br></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 259,
			'NodeTree' => '20',
			'NodeParentID' => '254',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 260,
			'NodeTree' => '20',
			'NodeParentID' => '259',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slGreenDark"><i>Hi friends and colleagues!</i></h3>
<p class="slGreenDark"><i>This page is where most businesses would begin their process of completing The Kind Guide\'s Business Survey. This \'Test Drive\' button lets you skip those email verification steps.</i></p>
<p class="slGreenDark"><i>-Katie</i></p>',
			'NodePromptAfter' => '<style> #blockWrap259 { margin-top: 60px; } #nBtn257 { margin-top: -15px; margin-bottom: 20px; } </style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 261,
			'NodeTree' => '20',
			'NodeParentID' => '256',
			'NodeType' => 'Email',
			'NodePromptText' => 'Email Address',
			'NodePromptAfter' => '<style> #node256kids, #node255kids { border: 1px #999 dashed; margin-top: -5px; } #node261 { padding: 20px; } </style>',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 262,
			'NodeTree' => '20',
			'NodeParentID' => '255',
			'NodeType' => 'MFA Dialogue',
			'NodeResponseSet' => '16'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 263,
			'NodeTree' => '20',
			'NodeParentID' => '256',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<center><div style="padding: 0px 20px 20px 20px;"><a id="hidivBtnCodeSoon" class="btn btn-primary btn-lg hidivBtn" href="javascript:;"><i class="fa fa-envelope" aria-hidden="true"></i> Email Access Code</a>
<div id="hidivCodeSoon" class="disNon taC"><i class="slGreenDark mT10">Coming Soon!</i></div>
</div></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 265,
			'NodeTree' => '19',
			'NodeParentID' => '331',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusName'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 266,
			'NodeTree' => '19',
			'NodeParentID' => '324',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 267,
			'NodeTree' => '19',
			'NodeParentID' => '330',
			'NodeType' => 'Data Print Block',
			'NodePromptText' => 'Contact Employee'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 268,
			'NodeTree' => '19',
			'NodeParentID' => '266',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 269,
			'NodeTree' => '19',
			'NodeParentID' => '268',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 270,
			'NodeTree' => '19',
			'NodeParentID' => '268',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 272,
			'NodeTree' => '19',
			'NodeParentID' => '267',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusFirstName'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 273,
			'NodeTree' => '19',
			'NodeParentID' => '267',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusLastName'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 274,
			'NodeTree' => '19',
			'NodeParentID' => '267',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusTitle'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 275,
			'NodeTree' => '19',
			'NodeParentID' => '267',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusEmail'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 276,
			'NodeTree' => '19',
			'NodeParentID' => '267',
			'NodeParentOrder' => '4',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusPhone'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 280,
			'NodeTree' => '19',
			'NodeParentID' => '329',
			'NodeType' => 'Data Print Block',
			'NodePromptText' => 'General'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 281,
			'NodeTree' => '19',
			'NodeParentID' => '280',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusZipCode'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 282,
			'NodeTree' => '19',
			'NodeParentID' => '280',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusState'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 283,
			'NodeTree' => '19',
			'NodeParentID' => '280',
			'NodeParentOrder' => '4',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusMultipleStates'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 284,
			'NodeTree' => '19',
			'NodeParentID' => '280',
			'NodeParentOrder' => '5',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'BusinessStates:BusStatState'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 285,
			'NodeTree' => '19',
			'NodeParentID' => '305',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusCurrentCsr'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 286,
			'NodeTree' => '19',
			'NodeParentID' => '280',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'BusinessSectors:BusSectSector'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 287,
			'NodeTree' => '19',
			'NodeParentID' => '280',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusSectorOther'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 288,
			'NodeTree' => '19',
			'NodeParentID' => '305',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Print Row',
			'NodePromptText' => '<p><br></p><p><br></p>',
			'NodeDataStore' => 'BusinessCSR:BusCsrPractice'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 289,
			'NodeTree' => '19',
			'NodeParentID' => '325',
			'NodeType' => 'Data Print Block',
			'NodePromptText' => 'Responsibility Basics'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 290,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusKnowCc'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 291,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusKnowCsr'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 292,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusKnowEs'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 293,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusKnowEsgReporting'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 294,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '4',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusInvestorAskCsr'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 295,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '5',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusInvestorAskEs'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 296,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '6',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusRequiredCsr'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 297,
			'NodeTree' => '19',
			'NodeParentID' => '289',
			'NodeParentOrder' => '7',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusRequiredEsp'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 298,
			'NodeTree' => '19',
			'NodeParentID' => '324',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 299,
			'NodeTree' => '19',
			'NodeParentID' => '298',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 300,
			'NodeTree' => '19',
			'NodeParentID' => '298',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 305,
			'NodeTree' => '19',
			'NodeParentID' => '326',
			'NodeType' => 'Data Print Block',
			'NodePromptText' => 'Corporate Social Responsibility (CSR)'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 306,
			'NodeTree' => '19',
			'NodeParentID' => '305',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusCurrentCsrOther'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 307,
			'NodeTree' => '19',
			'NodeParentID' => '305',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusCurrentCsrProgram'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 308,
			'NodeTree' => '19',
			'NodeParentID' => '305',
			'NodeParentOrder' => '4',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusCurrentCsrStaffTime'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 309,
			'NodeTree' => '19',
			'NodeParentID' => '305',
			'NodeParentOrder' => '5',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'BusinessNotCSR:BusCsrNotReason'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 310,
			'NodeTree' => '19',
			'NodeParentID' => '327',
			'NodeType' => 'Data Print Block',
			'NodePromptText' => 'Environmental Sustainability (ES)'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 311,
			'NodeTree' => '19',
			'NodeParentID' => '310',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusCurrentEs'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 312,
			'NodeTree' => '19',
			'NodeParentID' => '310',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'BusinessES:BusEsPractice'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 313,
			'NodeTree' => '19',
			'NodeParentID' => '310',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusEsOther'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 314,
			'NodeTree' => '19',
			'NodeParentID' => '310',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusCurrentEsStaffTime'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 315,
			'NodeTree' => '19',
			'NodeParentID' => '310',
			'NodeParentOrder' => '4',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'BusinessNotES:BusEsNotReason'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 316,
			'NodeTree' => '19',
			'NodeParentID' => '328',
			'NodeType' => 'Data Print Block',
			'NodePromptText' => 'Participation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 317,
			'NodeTree' => '19',
			'NodeParentID' => '316',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusFreeSupport'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 318,
			'NodeTree' => '19',
			'NodeParentID' => '316',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusPublic'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 319,
			'NodeTree' => '19',
			'NodeParentID' => '316',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusPublicFeatured'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 320,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '2',
			'NodeType' => 'Hidden Field',
			'NodeDataStore' => 'Business:BusIsTest'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 321,
			'NodeTree' => '16',
			'NodeParentID' => '121',
			'NodeParentOrder' => '3',
			'NodeType' => 'Data Manip: Update',
			'NodeResponseSet' => '324',
			'NodeDataStore' => 'Business:BusStatus'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 322,
			'NodeTree' => '19',
			'NodeParentID' => '316',
			'NodeType' => 'Data Print Row',
			'NodeDataStore' => 'Business:BusStatus'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 324,
			'NodeTree' => '19',
			'NodeParentID' => '247',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 325,
			'NodeTree' => '19',
			'NodeParentID' => '324',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 326,
			'NodeTree' => '19',
			'NodeParentID' => '324',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 327,
			'NodeTree' => '19',
			'NodeParentID' => '324',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 328,
			'NodeTree' => '19',
			'NodeParentID' => '269',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 329,
			'NodeTree' => '19',
			'NodeParentID' => '299',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 330,
			'NodeTree' => '19',
			'NodeParentID' => '270',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 331,
			'NodeTree' => '19',
			'NodeParentID' => '299',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 332,
			'NodeTree' => '19',
			'NodeParentID' => '299',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;<br></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 333,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '12',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever contacted a cannabis industry event, conference, or trade show in search of work-trade opportunities?',
			'NodeDataStore' => 'ConsumerSurvey:ConEventVolunContact',
			'NodeOpts' => '395'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 334,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeParentOrder' => '18',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'ConsumerSurvey:ConFeedback1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 335,
			'NodeTree' => '5',
			'NodeParentID' => '146',
			'NodeParentOrder' => '21',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'ConsumerSurvey:ConFeedback2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 336,
			'NodeTree' => '5',
			'NodeParentID' => '79',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'ConsumerSurvey:ConFeedback3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 337,
			'NodeTree' => '5',
			'NodeParentID' => '217',
			'NodeParentOrder' => '20',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'ConsumerSurvey:ConFeedback4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 338,
			'NodeTree' => '5',
			'NodeParentID' => '174',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'ConsumerSurvey:ConFeedback5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 339,
			'NodeTree' => '16',
			'NodeParentID' => '68',
			'NodeParentOrder' => '21',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'Business:BusFeedback1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 340,
			'NodeTree' => '16',
			'NodeParentID' => '119',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'Business:BusFeedback2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 341,
			'NodeTree' => '16',
			'NodeParentID' => '120',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => '<i class="slGrey"><i class="fa fa-comment-o" aria-hidden="true"></i> Any suggestions about how to make this page more useful, easier to fill out, or understand?</i>',
			'NodeDataStore' => 'Business:BusFeedback3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 342,
			'NodeTree' => '21',
			'NodeType' => 'Data Manip: New',
			'NodePromptText' => '<p><br></p>',
			'NodePromptNotes' => 'send',
			'NodePromptAfter' => 'Invite a brand or business to participate::M::::M::::M::',
			'NodeDataBranch' => 'BusinessInvites'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 343,
			'NodeTree' => '21',
			'NodeParentID' => '356',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Business Name',
			'NodeDataStore' => 'BusinessInvites:BusInvName',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 344,
			'NodeTree' => '21',
			'NodeParentID' => '356',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Business Location',
			'NodeDataStore' => 'BusinessInvites:BusInvLocation',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 345,
			'NodeTree' => '21',
			'NodeParentID' => '356',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you ever purchased this brand\'s products/services, or visited this business establishment?',
			'NodeDataStore' => 'BusinessInvites:BusInvIsCustomer',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 346,
			'NodeTree' => '21',
			'NodeParentID' => '356',
			'NodeParentOrder' => '4',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Business Contact Information',
			'NodePromptNotes' => 'Website? Email? Address? Phone? LinkedIn? Employee contact? CEO email? Any extra insight is helpful, but none is necessary.',
			'NodeDataStore' => 'BusinessInvites:BusInvContact'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 347,
			'NodeTree' => '21',
			'NodeParentID' => '356',
			'NodeParentOrder' => '5',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Useful notes or insights:',
			'NodePromptNotes' => 'Stories, news articles, or other relevant items worth knowing about this business and their practices or impacts.',
			'NodeDataStore' => 'BusinessInvites:BusInvNotes'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 348,
			'NodeTree' => '5',
			'NodeParentID' => '38',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions Raw'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 349,
			'NodeTree' => '21',
			'NodeParentID' => '356',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="clrLnk">Invite a cannabis brand or business to participate in <nobr>The Kind Guide.</nobr></h3><p>Simply fill out the information below, submit your invitation, and share it on your preferred social media channels! The Kind Guide will verify the business is not currently working on a survey, and contact the business directly with a private link to participate. </p><p>In The Kind Guide App, you can track and manage all of your public invitations, connect with other like minded stakeholders, and begin identifying ways to address Drug War impacts in your local community. You will be notified as soon as your invitation is accepted and a company completes their Business Survey.<br></p><p class="clrLnk"><b> 

Note: you may personally submit ONE invitation per business, so encourage others to invite brands as well. </b></p><p>Once a company has received (and ignored) 20 invitations from 20 different consumers, The Kind Guide will begin leveraging our social media presence and grassroots activist network to encourage local businesses to participate in Corporate Social Responsibility (CSR).</p><p>We recognize that shifting business paradigms is difficult and takes time, which is why participation in collaborative dialogue alone will be rewarded here at the early stages of this project. Even if a company isn\'t leading the charge on Conscious Capitalism in it\'s community, their participation in this survey proves to consumers they\'re willing and able to listen to the communities they operate within.</p><p>Once a baseline of CSR metrics are established for the industry, we will collectively analyze the data, publish public reports, and hold stakeholder meetings to identify best practices and next steps for The Kind Guide.</p><p><br></p>',
			'NodePromptAfter' => '<style> #node349 { margin-top: -40px; } </style>
<script type="text/javascript">
setTimeout("document.getElementById(\'nFormNextBtn\').innerHTML=\'Invite\'", 10);
</script>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 350,
			'NodeTree' => '23',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'web-app-technical-specs',
			'NodePromptAfter' => 'Web App Technical Specs::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 351,
			'NodeTree' => '23',
			'NodeParentID' => '352',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>About The Software</h2><p>
The Kind Guide web app was written using PHP, MySQL, AJAX, JS, jQuery, CSS, etc, as an extension of the <a href="https://survloop.org" target="_blank">SurvLoop open data engine</a>. This was built atop the open source <a href="http://laravel.com/" target="_blank">Laravel (v5.6) coding framework</a>. More to come and open source soon!<br></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 352,
			'NodeTree' => '23',
			'NodeParentID' => '350',
			'NodeType' => 'Page Block',
			'NodeOpts' => '67'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 353,
			'NodeTree' => '23',
			'NodeParentID' => '352',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<img src="/kindguide/uploads/KindGuide_App_Flow_Diagram.png" class="w100" border="0">',
			'NodePromptAfter' => '<style> #node353 { margin-top: 30px; background: #FFF; -moz-border-radius: 10px; border-radius: 10px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 354,
			'NodeTree' => '23',
			'NodeParentID' => '352',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 355,
			'NodeTree' => '5',
			'NodeParentID' => '38',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><a href="/restart?redir=/start/consumers" class="btn btn-secondary" style="color: #FFF;">Restart Survey</a><p><br></p><h3 class="clrLnk">Be sure to use the The Kind Guide App to search for socially responsible brands in your area. Sign up to invite your favorite brands to participate!</h3><p></p><p>&nbsp;</p>
<a href="/register?volunteer=yes" target="_blank" class="btn btn-xl btn-primary">Sign up to Invite</a></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 356,
			'NodeTree' => '21',
			'NodeParentID' => '342',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'send',
			'NodePromptAfter' => 'Invite a brand or business to participate::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 357,
			'NodeTree' => '21',
			'NodeParentID' => '342',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'business-invite-sent',
			'NodePromptAfter' => 'Business Invite Sent!::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 358,
			'NodeTree' => '21',
			'NodeParentID' => '357',
			'NodeType' => 'Instructions',
			'NodePromptAfter' => '<style> #sessMgmtWrap { display: none; } </style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 359,
			'NodeTree' => '14',
			'NodeParentID' => '62',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<a href="/dashboard/start/business-invite?new=1" class="btn btn-lg btn-primary w100">Invite Another Cannabis Brand or Business to Participate</a>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 360,
			'NodeTree' => '14',
			'NodeParentID' => '60',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 361,
			'NodeTree' => '24',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Nonprofit'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 362,
			'NodeTree' => '24',
			'NodeParentID' => '361',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'org-info',
			'NodePromptAfter' => 'Cannabis Community Nonprofit Directory::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 363,
			'NodeTree' => '24',
			'NodeParentID' => '362',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Name of Organization',
			'NodeDataStore' => 'Nonprofit:NonName',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 364,
			'NodeTree' => '24',
			'NodeParentID' => '362',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Website',
			'NodeDataStore' => 'Nonprofit:NonWebsite'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 365,
			'NodeTree' => '24',
			'NodeParentID' => '362',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you an employee or founder of this organization?',
			'NodeDataStore' => 'Nonprofit:NonIsEmployee',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 366,
			'NodeTree' => '24',
			'NodeParentID' => '365',
			'NodeType' => 'Text',
			'NodePromptText' => 'What\'s your contact email?',
			'NodeDataStore' => 'Nonprofit:NonEmail',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 367,
			'NodeTree' => '24',
			'NodeParentID' => '362',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">Add to the Cannabis Community Nonprofit Directory!</h3>
<p>Organizations DO NOT need to be a registered 501(c)3 to be listed, but please indicate your nonprofit status on the form below. <b>Thank you for participating!</b></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 368,
			'NodeTree' => '24',
			'NodeParentID' => '362',
			'NodeParentOrder' => '3',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'What is this organization\'s registered tax status?',
			'NodeResponseSet' => 'Definition::Nonprofit Tax Status',
			'NodeDataStore' => 'Nonprofit:NonTaxStatus'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 369,
			'NodeTree' => '26',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'cannabis-community-nonprofit-directory',
			'NodePromptAfter' => 'Cannabis Community Nonprofit Directory::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 370,
			'NodeTree' => '26',
			'NodeParentID' => '371',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p> </p><h2 class="slBlueDark">Cannabis Community Nonprofit Directory</h2>
<p>We are creating a nationwide database of <b>Every. Single. Cannabis affiliated nonprofit or community support organization.</b> This Directory will be used to inform The Kind Guide\'s preliminary report on Corporate Social Responsibility in the United States Cannabis Industry. </p><p><b>Please participate</b> by adding any cannabis community nonprofit organizations which are not already on this list. They DO NOT need to be a registered as a 501(c)3 to be listed. <b>Share this link</b> far and wide to help us establish a baseline of CSR for the cannabis industry! As legalization unfolds, this baseline will help insure our <b>compassionate roots scale up along with the industry</b>.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 371,
			'NodeTree' => '26',
			'NodeParentID' => '369',
			'NodeType' => 'Page Block',
			'NodeOpts' => '67'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 372,
			'NodeTree' => '26',
			'NodeParentID' => '379',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>(Social Media Sharing)<br></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 373,
			'NodeTree' => '26',
			'NodeParentID' => '371',
			'NodeParentOrder' => '2',
			'NodeType' => 'Record Previews',
			'NodePromptText' => '<h4>Nonprofit Directory Listing:</h4>
<p>&nbsp;</p>',
			'NodePromptAfter' => '<p>&nbsp;</p>
<a href="/start/nonprofit-directory" class="btn btn-primary">Add New Nonprofit</a>
<p>&nbsp;</p>
<style>
#n373ajaxLoad { font-size: 17px; }
</style>',
			'NodeResponseSet' => '24',
			'NodeDataBranch' => 'Nonprofit'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 374,
			'NodeTree' => '24',
			'NodeParentID' => '361',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'redirect-after-adding-nonprofit',
			'NodePromptAfter' => 'Redirect After Adding Nonprofit::M::::M::::M::',
			'NodeCharLimit' => '-1',
			'NodeOpts' => '1711'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 375,
			'NodeTree' => '24',
			'NodeParentID' => '374',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<p>&nbsp;</p><p>&nbsp;</p>
<center><img src="/kindguide/uploads/kind-loading-anim.gif" border=0 ></center>
<p>&nbsp;</p><p>&nbsp;</p>
<script type="text/javascript">
setTimeout("window.location=\'/cannabis-community-nonprofit-directory\'", 500);
</script>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 377,
			'NodeTree' => '26',
			'NodeParentID' => '371',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 378,
			'NodeTree' => '26',
			'NodeParentID' => '377',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 379,
			'NodeTree' => '26',
			'NodeParentID' => '377',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 380,
			'NodeTree' => '26',
			'NodeParentID' => '378',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<a href="/start/nonprofit-directory" class="btn btn-primary btn-lg w100">Add New Nonprofit</a>
<p>&nbsp;</p>'
		]);
	
	DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 15,
			'NodeResNode' => '13',
			'NodeResEng' => 'Walking',
			'NodeResValue' => '15'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 16,
			'NodeResNode' => '13',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Bicycle',
			'NodeResValue' => '14'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 17,
			'NodeResNode' => '13',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Subway/Metro',
			'NodeResValue' => '12'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 18,
			'NodeResNode' => '13',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Automobile',
			'NodeResValue' => '13'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 19,
			'NodeResNode' => '13',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Train',
			'NodeResValue' => '11'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 20,
			'NodeResNode' => '13',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Plane',
			'NodeResValue' => '10'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 21,
			'NodeResNode' => '3',
			'NodeResEng' => 'Transportation',
			'NodeResValue' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 22,
			'NodeResNode' => '3',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Travel Lodging',
			'NodeResValue' => '16'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 23,
			'NodeResNode' => '3',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Physical Things Purchased',
			'NodeResValue' => '2'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 24,
			'NodeResNode' => '3',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Digital Things Used',
			'NodeResValue' => '3'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 25,
			'NodeResNode' => '3',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Cannabis Things',
			'NodeResValue' => '4'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 30,
			'NodeResNode' => '25',
			'NodeResEng' => 'Daily',
			'NodeResValue' => '315'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 31,
			'NodeResNode' => '25',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Every few days',
			'NodeResValue' => '316'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 32,
			'NodeResNode' => '25',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Weekly',
			'NodeResValue' => '317'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 33,
			'NodeResNode' => '25',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Occasionally',
			'NodeResValue' => '318'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 34,
			'NodeResNode' => '25',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Rarely',
			'NodeResValue' => '319'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 35,
			'NodeResNode' => '25',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Never',
			'NodeResValue' => '320'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 82,
			'NodeResNode' => '35',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 83,
			'NodeResNode' => '35',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 84,
			'NodeResNode' => '35',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => 'Maybe'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 85,
			'NodeResNode' => '36',
			'NodeResEng' => 'Yes, full time job(s)',
			'NodeResValue' => '310'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 86,
			'NodeResNode' => '36',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Yes, more than one part time job',
			'NodeResValue' => '311'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 87,
			'NodeResNode' => '36',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Yes, part time',
			'NodeResValue' => '312'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 88,
			'NodeResNode' => '36',
			'NodeResOrd' => '3',
			'NodeResEng' => 'No',
			'NodeResValue' => '313'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 89,
			'NodeResNode' => '36',
			'NodeResOrd' => '4',
			'NodeResEng' => 'No, I am retired',
			'NodeResValue' => '314'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 92,
			'NodeResNode' => '72',
			'NodeResEng' => 'Retail',
			'NodeResValue' => '85'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 93,
			'NodeResNode' => '72',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Manufacturing',
			'NodeResValue' => '86'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 94,
			'NodeResNode' => '72',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Cultivation',
			'NodeResValue' => '87'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 98,
			'NodeResNode' => '74',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 99,
			'NodeResNode' => '74',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 100,
			'NodeResNode' => '74',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 101,
			'NodeResNode' => '75',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 102,
			'NodeResNode' => '75',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 103,
			'NodeResNode' => '75',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 104,
			'NodeResNode' => '76',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 105,
			'NodeResNode' => '76',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 106,
			'NodeResNode' => '76',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 107,
			'NodeResNode' => '24',
			'NodeResEng' => 'Medical (diagnosed condition)',
			'NodeResValue' => '150'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 108,
			'NodeResNode' => '24',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Recreational',
			'NodeResValue' => '151'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 109,
			'NodeResNode' => '24',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Spiritual',
			'NodeResValue' => '152'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 110,
			'NodeResNode' => '24',
			'NodeResOrd' => '3',
			'NodeResEng' => 'General Health and Wellness',
			'NodeResValue' => '153'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 111,
			'NodeResNode' => '26',
			'NodeResEng' => 'Raw Flower',
			'NodeResValue' => '92'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 112,
			'NodeResNode' => '26',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Infused Edibles (prepared food and beverages)',
			'NodeResValue' => '93'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 113,
			'NodeResNode' => '26',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Topicals (lotions, oils, salves, suppositories)',
			'NodeResValue' => '94'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 114,
			'NodeResNode' => '26',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Concentrates (oils, distillates, hash)',
			'NodeResValue' => '95'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 115,
			'NodeResNode' => '26',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Pre-filled Vape Cartridges',
			'NodeResValue' => '96'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 116,
			'NodeResNode' => '26',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Capsules/Tinctures',
			'NodeResValue' => '97'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 117,
			'NodeResNode' => '26',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Infused Cooking/Baking Ingredients (butters, oils, sauces, etc.)',
			'NodeResValue' => '154'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 118,
			'NodeResNode' => '26',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Clones and Seeds',
			'NodeResValue' => '155'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 119,
			'NodeResNode' => '80',
			'NodeResEng' => 'Pre-order from Dispensary',
			'NodeResValue' => '157'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 120,
			'NodeResNode' => '80',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Delivery Service via App or Website',
			'NodeResValue' => '158'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 121,
			'NodeResNode' => '80',
			'NodeResOrd' => '2',
			'NodeResEng' => 'On Site at Dispensary',
			'NodeResValue' => '156'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 122,
			'NodeResNode' => '87',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '108'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 123,
			'NodeResNode' => '87',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 124,
			'NodeResNode' => '72',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Media',
			'NodeResValue' => '160'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 125,
			'NodeResNode' => '72',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Event Management/Hosting',
			'NodeResValue' => '161'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 126,
			'NodeResNode' => '72',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Catering',
			'NodeResValue' => '162'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 127,
			'NodeResNode' => '72',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Legal',
			'NodeResValue' => '163'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 128,
			'NodeResNode' => '72',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Business Development',
			'NodeResValue' => '164'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 129,
			'NodeResNode' => '72',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Consulting',
			'NodeResValue' => '165'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 130,
			'NodeResNode' => '72',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Waste Management',
			'NodeResValue' => '166'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 131,
			'NodeResNode' => '72',
			'NodeResOrd' => '10',
			'NodeResEng' => 'Real Estate',
			'NodeResValue' => '167'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 132,
			'NodeResNode' => '72',
			'NodeResOrd' => '11',
			'NodeResEng' => 'Finance/Investments',
			'NodeResValue' => '168'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 133,
			'NodeResNode' => '72',
			'NodeResOrd' => '12',
			'NodeResEng' => 'Fitness',
			'NodeResValue' => '169'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 134,
			'NodeResNode' => '72',
			'NodeResOrd' => '13',
			'NodeResEng' => 'Laboratory Testing',
			'NodeResValue' => '170'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 135,
			'NodeResNode' => '72',
			'NodeResOrd' => '14',
			'NodeResEng' => 'Marketing',
			'NodeResValue' => '171'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 136,
			'NodeResNode' => '72',
			'NodeResOrd' => '15',
			'NodeResEng' => 'Packaging',
			'NodeResValue' => '172'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 137,
			'NodeResNode' => '72',
			'NodeResOrd' => '16',
			'NodeResEng' => 'Other Not Listed',
			'NodeResValue' => '173',
			'NodeResShowKids' => '109'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 141,
			'NodeResNode' => '93',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 142,
			'NodeResNode' => '93',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 143,
			'NodeResNode' => '93',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 144,
			'NodeResNode' => '94',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 145,
			'NodeResNode' => '94',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 146,
			'NodeResNode' => '94',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 147,
			'NodeResNode' => '95',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 148,
			'NodeResNode' => '95',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 149,
			'NodeResNode' => '95',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 150,
			'NodeResNode' => '97',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '98'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 151,
			'NodeResNode' => '97',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 160,
			'NodeResNode' => '99',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '100'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 161,
			'NodeResNode' => '99',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '101'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 173,
			'NodeResNode' => '104',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '110'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 174,
			'NodeResNode' => '104',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '105'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 190,
			'NodeResNode' => '112',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 191,
			'NodeResNode' => '112',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 192,
			'NodeResNode' => '113',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 193,
			'NodeResNode' => '113',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 194,
			'NodeResNode' => '114',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 195,
			'NodeResNode' => '114',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 196,
			'NodeResNode' => '114',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 197,
			'NodeResNode' => '115',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 198,
			'NodeResNode' => '115',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 199,
			'NodeResNode' => '115',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 200,
			'NodeResNode' => '117',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '118'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 201,
			'NodeResNode' => '117',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 202,
			'NodeResNode' => '118',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 203,
			'NodeResNode' => '118',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 205,
			'NodeResNode' => '112',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 206,
			'NodeResNode' => '113',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 207,
			'NodeResNode' => '98',
			'NodeResEng' => 'Philanthropic support to cannabis/drug policy related nonprofits or foundations (such as SSDP, DPA, MPP, ASA, RII, ICFA, CannaKids, Operation EVAC, MCBA, etc.)',
			'NodeResValue' => '174'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 208,
			'NodeResNode' => '98',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Philanthropic support to noncannabis nonprofits or foundations? (such as American Cancer Society, HRAC, SurfRider, your local Food Bank, etc.)',
			'NodeResValue' => '175'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 209,
			'NodeResNode' => '98',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Company sponsored community facing projects like food drives, toy drives, beach cleanups, expungement clinics, and other company-wide volunteer efforts etc.',
			'NodeResValue' => '176'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 210,
			'NodeResNode' => '98',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Compassion programs to help support costs of medicines for patients',
			'NodeResValue' => '177'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 211,
			'NodeResNode' => '98',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Job training and/or hiring of formerly incarcerated individuals',
			'NodeResValue' => '178'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 212,
			'NodeResNode' => '98',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Financial support for employees who wish to spend time volunteering',
			'NodeResValue' => '179'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 213,
			'NodeResNode' => '98',
			'NodeResOrd' => '6',
			'NodeResEng' => 'We work with a 3rd party agency to support or verify our CSR commitment (i.e. KindColorado, B-Corps, Fair Trade USA)',
			'NodeResValue' => '180'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 214,
			'NodeResNode' => '98',
			'NodeResOrd' => '7',
			'NodeResEng' => 'We are by design a socially responsible business, as is evident in our business model and corporate governance structure',
			'NodeResValue' => '181'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 215,
			'NodeResNode' => '98',
			'NodeResOrd' => '8',
			'NodeResEng' => 'We ascribe to the values of CSR as is evident in our mission statement and purpose',
			'NodeResValue' => '182'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 216,
			'NodeResNode' => '98',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Other',
			'NodeResValue' => '183',
			'NodeResShowKids' => '102'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 217,
			'NodeResNode' => '100',
			'NodeResEng' => 'We have a Full-Time CSR person',
			'NodeResValue' => '184'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 218,
			'NodeResNode' => '100',
			'NodeResOrd' => '1',
			'NodeResEng' => 'We have a Part-Time CSR person',
			'NodeResValue' => '185'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 219,
			'NodeResNode' => '100',
			'NodeResOrd' => '2',
			'NodeResEng' => 'We dedicate 10+ hours monthly from various staff members to CSR activity',
			'NodeResValue' => '186'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 220,
			'NodeResNode' => '100',
			'NodeResOrd' => '3',
			'NodeResEng' => 'We dedicate >10 hours monthly to CSR activity',
			'NodeResValue' => '187'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 221,
			'NodeResNode' => '101',
			'NodeResEng' => 'Not interested',
			'NodeResValue' => '188'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 222,
			'NodeResNode' => '101',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Unable to financially support such a program',
			'NodeResValue' => '189'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 223,
			'NodeResNode' => '101',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Unable to dedicate staff time',
			'NodeResValue' => '190'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 224,
			'NodeResNode' => '101',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Our current business model does not allow for a CSR program',
			'NodeResValue' => '191'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 225,
			'NodeResNode' => '101',
			'NodeResOrd' => '4',
			'NodeResEng' => 'We plan to establish a CSR program once we can commit resources to it',
			'NodeResValue' => '192'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 226,
			'NodeResNode' => '101',
			'NodeResOrd' => '5',
			'NodeResEng' => 'We would be interested in receiving free assistance to establish a CSR program',
			'NodeResValue' => '193'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 232,
			'NodeResNode' => '106',
			'NodeResEng' => 'We have a Full-Time Environmental Sustainability staff person',
			'NodeResValue' => '199'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 233,
			'NodeResNode' => '106',
			'NodeResOrd' => '1',
			'NodeResEng' => 'We have a Part-Time Environmental Sustainability staff person',
			'NodeResValue' => '200'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 234,
			'NodeResNode' => '106',
			'NodeResOrd' => '2',
			'NodeResEng' => 'We dedicate 10+ hours monthly from various staff members to Environmental Sustainability',
			'NodeResValue' => '201'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 235,
			'NodeResNode' => '106',
			'NodeResOrd' => '3',
			'NodeResEng' => 'We dedicate >10 hours monthly to Environmental Sustainability',
			'NodeResValue' => '202'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 236,
			'NodeResNode' => '105',
			'NodeResEng' => 'Not interested',
			'NodeResValue' => '203'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 237,
			'NodeResNode' => '105',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Unable to financially support such a program',
			'NodeResValue' => '204'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 238,
			'NodeResNode' => '105',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Unable to dedicate staff time',
			'NodeResValue' => '205'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 239,
			'NodeResNode' => '105',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Our current business model does not allow for such such a program',
			'NodeResValue' => '206'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 240,
			'NodeResNode' => '105',
			'NodeResOrd' => '4',
			'NodeResEng' => 'We plan to establish an ES once we can commit resources to it',
			'NodeResValue' => '207'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 241,
			'NodeResNode' => '105',
			'NodeResOrd' => '5',
			'NodeResEng' => 'We would be interested in receiving free assistance to establish an ES program',
			'NodeResValue' => '208'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 242,
			'NodeResNode' => '107',
			'NodeResEng' => 'We measure our environmental impacts and work to address them',
			'NodeResValue' => '194'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 243,
			'NodeResNode' => '107',
			'NodeResOrd' => '1',
			'NodeResEng' => 'We use renewable energy in our operations',
			'NodeResValue' => '195'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 244,
			'NodeResNode' => '107',
			'NodeResOrd' => '2',
			'NodeResEng' => 'We financially offset the environmental impacts of our operations through programs like Carbon Fund (materials, travel, etc.)',
			'NodeResValue' => '196'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 245,
			'NodeResNode' => '107',
			'NodeResOrd' => '3',
			'NodeResEng' => 'We have ES protocols written directly into our business plans',
			'NodeResValue' => '197'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 246,
			'NodeResNode' => '107',
			'NodeResOrd' => '4',
			'NodeResEng' => 'We work with a 3rd party agency to verify our ES commitments (i.e. Clean Green, Cannabis Conservancy)',
			'NodeResValue' => '198'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 247,
			'NodeResNode' => '107',
			'NodeResOrd' => '5',
			'NodeResEng' => 'We educate our employees about ES and actively seek their input and involvement',
			'NodeResValue' => '216'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 248,
			'NodeResNode' => '107',
			'NodeResOrd' => '6',
			'NodeResEng' => 'We encourage our business partners to engage in ES efforts',
			'NodeResValue' => '217'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 249,
			'NodeResNode' => '107',
			'NodeResOrd' => '7',
			'NodeResEng' => 'We stay informed on ES research as it relates to our business operations',
			'NodeResValue' => '218'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 250,
			'NodeResNode' => '107',
			'NodeResOrd' => '8',
			'NodeResEng' => 'We educate our community about ES issues',
			'NodeResValue' => '219'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 251,
			'NodeResNode' => '107',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Other',
			'NodeResValue' => '220',
			'NodeResShowKids' => '1000000000'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 252,
			'NodeResNode' => '129',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 253,
			'NodeResNode' => '129',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 254,
			'NodeResNode' => '130',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 255,
			'NodeResNode' => '130',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 256,
			'NodeResNode' => '130',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 257,
			'NodeResNode' => '133',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '240'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 258,
			'NodeResNode' => '133',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '187'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 259,
			'NodeResNode' => '134',
			'NodeResEng' => 'Employee',
			'NodeResValue' => '265'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 260,
			'NodeResNode' => '134',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Owner',
			'NodeResValue' => '266'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 261,
			'NodeResNode' => '134',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Executive/Management',
			'NodeResValue' => '267'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 262,
			'NodeResNode' => '134',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Retail',
			'NodeResValue' => '268'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 263,
			'NodeResNode' => '134',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Ancillary',
			'NodeResValue' => '269'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 264,
			'NodeResNode' => '136',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 265,
			'NodeResNode' => '136',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 274,
			'NodeResNode' => '139',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '140'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 275,
			'NodeResNode' => '139',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 276,
			'NodeResNode' => '140',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '141'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 277,
			'NodeResNode' => '140',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 278,
			'NodeResNode' => '142',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 279,
			'NodeResNode' => '142',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 280,
			'NodeResNode' => '142',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 281,
			'NodeResNode' => '143',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 282,
			'NodeResNode' => '143',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 283,
			'NodeResNode' => '143',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 284,
			'NodeResNode' => '144',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 285,
			'NodeResNode' => '144',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 286,
			'NodeResNode' => '144',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 287,
			'NodeResNode' => '145',
			'NodeResEng' => 'BCorp',
			'NodeResValue' => '277'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 288,
			'NodeResNode' => '145',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Fair Trade USA',
			'NodeResValue' => '278'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 289,
			'NodeResNode' => '145',
			'NodeResOrd' => '2',
			'NodeResEng' => 'LEED Certification',
			'NodeResValue' => '279'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 290,
			'NodeResNode' => '145',
			'NodeResOrd' => '3',
			'NodeResEng' => 'USDA Organic Certification',
			'NodeResValue' => '280'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 291,
			'NodeResNode' => '145',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Rainforest Alliance',
			'NodeResValue' => '281'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 292,
			'NodeResNode' => '145',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Roundtable on Sustainable Palm Oil',
			'NodeResValue' => '282'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 293,
			'NodeResNode' => '145',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Clean Green Certification',
			'NodeResValue' => '283'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 294,
			'NodeResNode' => '145',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Cannabis Conservancy Certification',
			'NodeResValue' => '284'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 295,
			'NodeResNode' => '145',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Cannabis PowerScore',
			'NodeResValue' => '285'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 296,
			'NodeResNode' => '145',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Cannabis Certification Council',
			'NodeResValue' => '286'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 297,
			'NodeResNode' => '145',
			'NodeResOrd' => '10',
			'NodeResEng' => 'KindColorado',
			'NodeResValue' => '287'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 298,
			'NodeResNode' => '145',
			'NodeResOrd' => '11',
			'NodeResEng' => 'FOCUS Certification',
			'NodeResValue' => '288'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 299,
			'NodeResNode' => '145',
			'NodeResOrd' => '12',
			'NodeResEng' => 'Carbonfund',
			'NodeResValue' => '289'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 300,
			'NodeResNode' => '145',
			'NodeResOrd' => '13',
			'NodeResEng' => 'Terrapass',
			'NodeResValue' => '290'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 301,
			'NodeResNode' => '145',
			'NodeResOrd' => '14',
			'NodeResEng' => 'UN Sustainable Development Goals',
			'NodeResValue' => '291'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 302,
			'NodeResNode' => '147',
			'NodeResEng' => 'Retail',
			'NodeResValue' => '85'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 303,
			'NodeResNode' => '147',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Delivery',
			'NodeResValue' => '210'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 304,
			'NodeResNode' => '147',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Cultivation',
			'NodeResValue' => '87'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 305,
			'NodeResNode' => '147',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Wholesale',
			'NodeResValue' => '212'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 306,
			'NodeResNode' => '147',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Manufacturing',
			'NodeResValue' => '86'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 307,
			'NodeResNode' => '147',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Media',
			'NodeResValue' => '160'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 308,
			'NodeResNode' => '147',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Event Management/Hosting',
			'NodeResValue' => '161'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 309,
			'NodeResNode' => '147',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Catering',
			'NodeResValue' => '162'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 310,
			'NodeResNode' => '147',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Edibles',
			'NodeResValue' => '209'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 311,
			'NodeResNode' => '147',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Legal',
			'NodeResValue' => '163'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 312,
			'NodeResNode' => '147',
			'NodeResOrd' => '10',
			'NodeResEng' => 'Business Development',
			'NodeResValue' => '164'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 313,
			'NodeResNode' => '147',
			'NodeResOrd' => '11',
			'NodeResEng' => 'Consulting',
			'NodeResValue' => '165'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 314,
			'NodeResNode' => '147',
			'NodeResOrd' => '12',
			'NodeResEng' => 'Waste Management',
			'NodeResValue' => '166'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 315,
			'NodeResNode' => '147',
			'NodeResOrd' => '13',
			'NodeResEng' => 'Real Estate',
			'NodeResValue' => '167'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 316,
			'NodeResNode' => '147',
			'NodeResOrd' => '14',
			'NodeResEng' => 'Finance/Investments',
			'NodeResValue' => '168'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 317,
			'NodeResNode' => '147',
			'NodeResOrd' => '15',
			'NodeResEng' => 'Fitness',
			'NodeResValue' => '169'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 318,
			'NodeResNode' => '147',
			'NodeResOrd' => '16',
			'NodeResEng' => 'Laboratory Testing',
			'NodeResValue' => '170'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 319,
			'NodeResNode' => '147',
			'NodeResOrd' => '17',
			'NodeResEng' => 'Marketing',
			'NodeResValue' => '171'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 320,
			'NodeResNode' => '147',
			'NodeResOrd' => '18',
			'NodeResEng' => 'Packaging',
			'NodeResValue' => '172'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 321,
			'NodeResNode' => '147',
			'NodeResOrd' => '19',
			'NodeResEng' => 'Security',
			'NodeResValue' => '213'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 322,
			'NodeResNode' => '147',
			'NodeResOrd' => '20',
			'NodeResEng' => 'Construction',
			'NodeResValue' => '214'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 323,
			'NodeResNode' => '147',
			'NodeResOrd' => '21',
			'NodeResEng' => 'Transportation',
			'NodeResValue' => '215'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 324,
			'NodeResNode' => '147',
			'NodeResOrd' => '22',
			'NodeResEng' => 'Other Not Listed',
			'NodeResValue' => '173'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 325,
			'NodeResNode' => '148',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1000000000'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 326,
			'NodeResNode' => '148',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 327,
			'NodeResNode' => '148',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 328,
			'NodeResNode' => '149',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '150'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 329,
			'NodeResNode' => '149',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 330,
			'NodeResNode' => '149',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '150'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 331,
			'NodeResNode' => '134',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Entrepreneur',
			'NodeResValue' => '270'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 332,
			'NodeResNode' => '134',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Established and licensed business',
			'NodeResValue' => '271'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 333,
			'NodeResNode' => '151',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 334,
			'NodeResNode' => '151',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 335,
			'NodeResNode' => '151',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 336,
			'NodeResNode' => '152',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 337,
			'NodeResNode' => '152',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 338,
			'NodeResNode' => '152',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 339,
			'NodeResNode' => '153',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 340,
			'NodeResNode' => '153',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 341,
			'NodeResNode' => '153',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 342,
			'NodeResNode' => '154',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 343,
			'NodeResNode' => '154',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 344,
			'NodeResNode' => '154',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 345,
			'NodeResNode' => '155',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 346,
			'NodeResNode' => '155',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 347,
			'NodeResNode' => '155',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 348,
			'NodeResNode' => '156',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 349,
			'NodeResNode' => '156',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 350,
			'NodeResNode' => '156',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 351,
			'NodeResNode' => '157',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 352,
			'NodeResNode' => '157',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 353,
			'NodeResNode' => '157',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 354,
			'NodeResNode' => '134',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Activist',
			'NodeResValue' => '272'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 355,
			'NodeResNode' => '134',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Advocate',
			'NodeResValue' => '273'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 356,
			'NodeResNode' => '134',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Patient',
			'NodeResValue' => '274'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 357,
			'NodeResNode' => '134',
			'NodeResOrd' => '10',
			'NodeResEng' => 'Nonprofit',
			'NodeResValue' => '275'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 358,
			'NodeResNode' => '134',
			'NodeResOrd' => '11',
			'NodeResEng' => 'Cannabis Plant Steward',
			'NodeResValue' => '276'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 364,
			'NodeResNode' => '159',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 365,
			'NodeResNode' => '159',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 366,
			'NodeResNode' => '159',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 367,
			'NodeResNode' => '160',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 368,
			'NodeResNode' => '160',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 369,
			'NodeResNode' => '160',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 370,
			'NodeResNode' => '161',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 371,
			'NodeResNode' => '161',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 372,
			'NodeResNode' => '161',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 373,
			'NodeResNode' => '162',
			'NodeResEng' => 'Friends',
			'NodeResValue' => '301'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 374,
			'NodeResNode' => '162',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Social Media',
			'NodeResValue' => '302'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 375,
			'NodeResNode' => '162',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Brand Website',
			'NodeResValue' => '303'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 376,
			'NodeResNode' => '162',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Magazines',
			'NodeResValue' => '304'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 377,
			'NodeResNode' => '162',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Online Research',
			'NodeResValue' => '305'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 378,
			'NodeResNode' => '162',
			'NodeResOrd' => '5',
			'NodeResEng' => 'In-Store advertising',
			'NodeResValue' => '306'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 379,
			'NodeResNode' => '162',
			'NodeResOrd' => '6',
			'NodeResEng' => 'In-Store demos',
			'NodeResValue' => '307'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 380,
			'NodeResNode' => '162',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Brand sponsored cannabis or community event',
			'NodeResValue' => '308'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 381,
			'NodeResNode' => '164',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 382,
			'NodeResNode' => '164',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 383,
			'NodeResNode' => '164',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 384,
			'NodeResNode' => '164',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 385,
			'NodeResNode' => '164',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 386,
			'NodeResNode' => '165',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 387,
			'NodeResNode' => '165',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 388,
			'NodeResNode' => '165',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 389,
			'NodeResNode' => '165',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 390,
			'NodeResNode' => '165',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 396,
			'NodeResNode' => '167',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 397,
			'NodeResNode' => '167',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 398,
			'NodeResNode' => '167',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 399,
			'NodeResNode' => '167',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 400,
			'NodeResNode' => '167',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 401,
			'NodeResNode' => '168',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 402,
			'NodeResNode' => '168',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 403,
			'NodeResNode' => '168',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 404,
			'NodeResNode' => '168',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 405,
			'NodeResNode' => '168',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 406,
			'NodeResNode' => '169',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 407,
			'NodeResNode' => '169',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 408,
			'NodeResNode' => '169',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 409,
			'NodeResNode' => '169',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 410,
			'NodeResNode' => '169',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 411,
			'NodeResNode' => '170',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 412,
			'NodeResNode' => '170',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 413,
			'NodeResNode' => '170',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 414,
			'NodeResNode' => '170',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 415,
			'NodeResNode' => '170',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 416,
			'NodeResNode' => '171',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 417,
			'NodeResNode' => '171',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 418,
			'NodeResNode' => '171',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 419,
			'NodeResNode' => '171',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 420,
			'NodeResNode' => '171',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 421,
			'NodeResNode' => '172',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 422,
			'NodeResNode' => '172',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 423,
			'NodeResNode' => '172',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 424,
			'NodeResNode' => '172',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 425,
			'NodeResNode' => '172',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 426,
			'NodeResNode' => '173',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 427,
			'NodeResNode' => '173',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 428,
			'NodeResNode' => '173',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 429,
			'NodeResNode' => '173',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 430,
			'NodeResNode' => '173',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 431,
			'NodeResNode' => '162',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Cannabis Business Directory (e.g. WeedMaps)',
			'NodeResValue' => '309'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 432,
			'NodeResNode' => '177',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 433,
			'NodeResNode' => '177',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 434,
			'NodeResNode' => '177',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 435,
			'NodeResNode' => '177',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 436,
			'NodeResNode' => '177',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 437,
			'NodeResNode' => '178',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 438,
			'NodeResNode' => '178',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 439,
			'NodeResNode' => '178',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 440,
			'NodeResNode' => '178',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 441,
			'NodeResNode' => '178',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 442,
			'NodeResNode' => '179',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 443,
			'NodeResNode' => '179',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 444,
			'NodeResNode' => '179',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 445,
			'NodeResNode' => '179',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 446,
			'NodeResNode' => '179',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 447,
			'NodeResNode' => '180',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '184'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 448,
			'NodeResNode' => '180',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 449,
			'NodeResNode' => '180',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 450,
			'NodeResNode' => '181',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1000000000'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 451,
			'NodeResNode' => '181',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 452,
			'NodeResNode' => '181',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 453,
			'NodeResNode' => '182',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1000000000'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 454,
			'NodeResNode' => '182',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 455,
			'NodeResNode' => '182',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1000000000'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 456,
			'NodeResNode' => '183',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '194'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 457,
			'NodeResNode' => '183',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 458,
			'NodeResNode' => '183',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 459,
			'NodeResNode' => '135',
			'NodeResEng' => '18-24',
			'NodeResValue' => '254'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 460,
			'NodeResNode' => '135',
			'NodeResOrd' => '1',
			'NodeResEng' => '25-29',
			'NodeResValue' => '255'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 461,
			'NodeResNode' => '135',
			'NodeResOrd' => '2',
			'NodeResEng' => '30-34',
			'NodeResValue' => '256'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 462,
			'NodeResNode' => '135',
			'NodeResOrd' => '3',
			'NodeResEng' => '35-39',
			'NodeResValue' => '257'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 463,
			'NodeResNode' => '135',
			'NodeResOrd' => '4',
			'NodeResEng' => '40-44',
			'NodeResValue' => '258'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 464,
			'NodeResNode' => '135',
			'NodeResOrd' => '5',
			'NodeResEng' => '45-49',
			'NodeResValue' => '259'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 465,
			'NodeResNode' => '135',
			'NodeResOrd' => '6',
			'NodeResEng' => '50-54',
			'NodeResValue' => '260'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 466,
			'NodeResNode' => '135',
			'NodeResOrd' => '7',
			'NodeResEng' => '55-59',
			'NodeResValue' => '261'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 467,
			'NodeResNode' => '135',
			'NodeResOrd' => '8',
			'NodeResEng' => '60-64',
			'NodeResValue' => '262'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 468,
			'NodeResNode' => '135',
			'NodeResOrd' => '9',
			'NodeResEng' => '65-69',
			'NodeResValue' => '263'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 469,
			'NodeResNode' => '135',
			'NodeResOrd' => '10',
			'NodeResEng' => '70+',
			'NodeResValue' => '264'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 470,
			'NodeResNode' => '184',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 471,
			'NodeResNode' => '184',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 472,
			'NodeResNode' => '184',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 473,
			'NodeResNode' => '185',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 474,
			'NodeResNode' => '185',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 475,
			'NodeResNode' => '185',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 476,
			'NodeResNode' => '186',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 477,
			'NodeResNode' => '186',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 478,
			'NodeResNode' => '186',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 479,
			'NodeResNode' => '187',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 480,
			'NodeResNode' => '187',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 481,
			'NodeResNode' => '187',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 482,
			'NodeResNode' => '80',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Homegrown',
			'NodeResValue' => '232'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 483,
			'NodeResNode' => '80',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Caregiver grows for me',
			'NodeResValue' => '234'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 484,
			'NodeResNode' => '188',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 485,
			'NodeResNode' => '188',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 486,
			'NodeResNode' => '188',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 487,
			'NodeResNode' => '189',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 488,
			'NodeResNode' => '189',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 489,
			'NodeResNode' => '189',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 490,
			'NodeResNode' => '190',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 491,
			'NodeResNode' => '190',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 492,
			'NodeResNode' => '190',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 493,
			'NodeResNode' => '191',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 494,
			'NodeResNode' => '191',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 495,
			'NodeResNode' => '191',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 497,
			'NodeResNode' => '194',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 498,
			'NodeResNode' => '194',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 499,
			'NodeResNode' => '194',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 500,
			'NodeResNode' => '145',
			'NodeResOrd' => '15',
			'NodeResEng' => 'Cage Free Cannabis',
			'NodeResValue' => '292'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 501,
			'NodeResNode' => '145',
			'NodeResOrd' => '16',
			'NodeResEng' => 'Craft Cannabis Alliance',
			'NodeResValue' => '293'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 502,
			'NodeResNode' => '195',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 503,
			'NodeResNode' => '195',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 504,
			'NodeResNode' => '195',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 505,
			'NodeResNode' => '196',
			'NodeResEng' => 'Brownie Mary',
			'NodeResValue' => '294'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 506,
			'NodeResNode' => '196',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Bob Marley',
			'NodeResValue' => '295'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 507,
			'NodeResNode' => '196',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Dennis Peron',
			'NodeResValue' => '296'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 508,
			'NodeResNode' => '196',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Willie Nelson',
			'NodeResValue' => '297'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 509,
			'NodeResNode' => '196',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Snoop Dogg',
			'NodeResValue' => '298'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 510,
			'NodeResNode' => '196',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Joe Rogan',
			'NodeResValue' => '299'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 511,
			'NodeResNode' => '196',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Jack Herer',
			'NodeResValue' => '300'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 512,
			'NodeResNode' => '197',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 513,
			'NodeResNode' => '197',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 514,
			'NodeResNode' => '197',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 515,
			'NodeResNode' => '197',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 516,
			'NodeResNode' => '197',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 517,
			'NodeResNode' => '199',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 518,
			'NodeResNode' => '199',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 519,
			'NodeResNode' => '199',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 520,
			'NodeResNode' => '199',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 521,
			'NodeResNode' => '199',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 522,
			'NodeResNode' => '200',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 523,
			'NodeResNode' => '200',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 524,
			'NodeResNode' => '200',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 525,
			'NodeResNode' => '200',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 526,
			'NodeResNode' => '200',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 527,
			'NodeResNode' => '205',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 528,
			'NodeResNode' => '205',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 529,
			'NodeResNode' => '205',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 530,
			'NodeResNode' => '205',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 531,
			'NodeResNode' => '205',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 532,
			'NodeResNode' => '202',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 533,
			'NodeResNode' => '202',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 534,
			'NodeResNode' => '202',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 535,
			'NodeResNode' => '202',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 536,
			'NodeResNode' => '202',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 537,
			'NodeResNode' => '201',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 538,
			'NodeResNode' => '201',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 539,
			'NodeResNode' => '201',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 540,
			'NodeResNode' => '201',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 541,
			'NodeResNode' => '201',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 542,
			'NodeResNode' => '198',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 543,
			'NodeResNode' => '198',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 544,
			'NodeResNode' => '198',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 545,
			'NodeResNode' => '198',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 546,
			'NodeResNode' => '198',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 547,
			'NodeResNode' => '204',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 548,
			'NodeResNode' => '204',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 549,
			'NodeResNode' => '204',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 550,
			'NodeResNode' => '204',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 551,
			'NodeResNode' => '204',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 552,
			'NodeResNode' => '203',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 553,
			'NodeResNode' => '203',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 554,
			'NodeResNode' => '203',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 555,
			'NodeResNode' => '203',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 556,
			'NodeResNode' => '203',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 557,
			'NodeResNode' => '206',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 558,
			'NodeResNode' => '206',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 559,
			'NodeResNode' => '206',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 560,
			'NodeResNode' => '206',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 561,
			'NodeResNode' => '206',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 562,
			'NodeResNode' => '207',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 563,
			'NodeResNode' => '207',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 564,
			'NodeResNode' => '207',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 565,
			'NodeResNode' => '207',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 566,
			'NodeResNode' => '207',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 567,
			'NodeResNode' => '208',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 568,
			'NodeResNode' => '208',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 569,
			'NodeResNode' => '208',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 570,
			'NodeResNode' => '208',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 571,
			'NodeResNode' => '208',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 572,
			'NodeResNode' => '209',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 573,
			'NodeResNode' => '209',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 574,
			'NodeResNode' => '209',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 575,
			'NodeResNode' => '209',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 576,
			'NodeResNode' => '209',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 577,
			'NodeResNode' => '210',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 578,
			'NodeResNode' => '210',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 579,
			'NodeResNode' => '210',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 580,
			'NodeResNode' => '210',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 581,
			'NodeResNode' => '210',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 582,
			'NodeResNode' => '211',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 583,
			'NodeResNode' => '211',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 584,
			'NodeResNode' => '211',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 585,
			'NodeResNode' => '211',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 586,
			'NodeResNode' => '211',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 587,
			'NodeResNode' => '212',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 588,
			'NodeResNode' => '212',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 589,
			'NodeResNode' => '212',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 590,
			'NodeResNode' => '212',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 591,
			'NodeResNode' => '212',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 592,
			'NodeResNode' => '213',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 593,
			'NodeResNode' => '213',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 594,
			'NodeResNode' => '213',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 595,
			'NodeResNode' => '213',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 596,
			'NodeResNode' => '213',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 597,
			'NodeResNode' => '214',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 598,
			'NodeResNode' => '214',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 599,
			'NodeResNode' => '214',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 600,
			'NodeResNode' => '214',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 601,
			'NodeResNode' => '214',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 602,
			'NodeResNode' => '215',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 603,
			'NodeResNode' => '215',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 604,
			'NodeResNode' => '215',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 605,
			'NodeResNode' => '215',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 606,
			'NodeResNode' => '215',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 607,
			'NodeResNode' => '216',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 608,
			'NodeResNode' => '216',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 609,
			'NodeResNode' => '216',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 610,
			'NodeResNode' => '216',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 611,
			'NodeResNode' => '216',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 612,
			'NodeResNode' => '218',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 613,
			'NodeResNode' => '218',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 614,
			'NodeResNode' => '218',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 615,
			'NodeResNode' => '218',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 616,
			'NodeResNode' => '218',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 617,
			'NodeResNode' => '219',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 618,
			'NodeResNode' => '219',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 619,
			'NodeResNode' => '219',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 620,
			'NodeResNode' => '219',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 621,
			'NodeResNode' => '219',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 622,
			'NodeResNode' => '220',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 623,
			'NodeResNode' => '220',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 624,
			'NodeResNode' => '220',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 625,
			'NodeResNode' => '220',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 626,
			'NodeResNode' => '220',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 627,
			'NodeResNode' => '221',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 628,
			'NodeResNode' => '221',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 629,
			'NodeResNode' => '221',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 630,
			'NodeResNode' => '221',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 631,
			'NodeResNode' => '221',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 632,
			'NodeResNode' => '222',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 633,
			'NodeResNode' => '222',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 634,
			'NodeResNode' => '222',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 635,
			'NodeResNode' => '222',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 636,
			'NodeResNode' => '222',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 637,
			'NodeResNode' => '223',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 638,
			'NodeResNode' => '223',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 639,
			'NodeResNode' => '223',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 640,
			'NodeResNode' => '223',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 641,
			'NodeResNode' => '223',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 642,
			'NodeResNode' => '224',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 643,
			'NodeResNode' => '224',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 644,
			'NodeResNode' => '224',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 645,
			'NodeResNode' => '224',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 646,
			'NodeResNode' => '224',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 647,
			'NodeResNode' => '225',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 648,
			'NodeResNode' => '225',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 649,
			'NodeResNode' => '225',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 650,
			'NodeResNode' => '225',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 651,
			'NodeResNode' => '225',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 652,
			'NodeResNode' => '226',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 653,
			'NodeResNode' => '226',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 654,
			'NodeResNode' => '226',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 655,
			'NodeResNode' => '226',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 656,
			'NodeResNode' => '226',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 657,
			'NodeResNode' => '227',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 658,
			'NodeResNode' => '227',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 659,
			'NodeResNode' => '227',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 660,
			'NodeResNode' => '227',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 661,
			'NodeResNode' => '227',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 662,
			'NodeResNode' => '228',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 663,
			'NodeResNode' => '228',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 664,
			'NodeResNode' => '228',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 665,
			'NodeResNode' => '228',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 666,
			'NodeResNode' => '228',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 667,
			'NodeResNode' => '229',
			'NodeResEng' => '1 - Never',
			'NodeResValue' => '227'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 668,
			'NodeResNode' => '229',
			'NodeResOrd' => '1',
			'NodeResEng' => '2 - Rarely',
			'NodeResValue' => '228'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 669,
			'NodeResNode' => '229',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Sometimes',
			'NodeResValue' => '229'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 670,
			'NodeResNode' => '229',
			'NodeResOrd' => '3',
			'NodeResEng' => '4 - Often',
			'NodeResValue' => '230'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 671,
			'NodeResNode' => '229',
			'NodeResOrd' => '4',
			'NodeResEng' => '5 - Always',
			'NodeResValue' => '231'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 672,
			'NodeResNode' => '230',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 673,
			'NodeResNode' => '230',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 674,
			'NodeResNode' => '230',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 675,
			'NodeResNode' => '230',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 676,
			'NodeResNode' => '230',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 677,
			'NodeResNode' => '231',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 678,
			'NodeResNode' => '231',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 679,
			'NodeResNode' => '231',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 680,
			'NodeResNode' => '231',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 681,
			'NodeResNode' => '231',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 682,
			'NodeResNode' => '232',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 683,
			'NodeResNode' => '232',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 684,
			'NodeResNode' => '232',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 685,
			'NodeResNode' => '232',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 686,
			'NodeResNode' => '232',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 687,
			'NodeResNode' => '233',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 688,
			'NodeResNode' => '233',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 689,
			'NodeResNode' => '233',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 690,
			'NodeResNode' => '233',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 691,
			'NodeResNode' => '233',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 692,
			'NodeResNode' => '234',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 693,
			'NodeResNode' => '234',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 694,
			'NodeResNode' => '234',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 695,
			'NodeResNode' => '234',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 696,
			'NodeResNode' => '234',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 697,
			'NodeResNode' => '235',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 698,
			'NodeResNode' => '235',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 699,
			'NodeResNode' => '235',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 700,
			'NodeResNode' => '235',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 701,
			'NodeResNode' => '235',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 702,
			'NodeResNode' => '236',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 703,
			'NodeResNode' => '236',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 704,
			'NodeResNode' => '236',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 705,
			'NodeResNode' => '236',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 706,
			'NodeResNode' => '236',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 707,
			'NodeResNode' => '237',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 708,
			'NodeResNode' => '237',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 709,
			'NodeResNode' => '237',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 710,
			'NodeResNode' => '237',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 711,
			'NodeResNode' => '237',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 712,
			'NodeResNode' => '238',
			'NodeResEng' => '5 - Very important',
			'NodeResValue' => '235'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 713,
			'NodeResNode' => '238',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '236'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 714,
			'NodeResNode' => '238',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 715,
			'NodeResNode' => '238',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 716,
			'NodeResNode' => '238',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Not Important',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 717,
			'NodeResNode' => '138',
			'NodeResEng' => 'Some High School',
			'NodeResValue' => '240'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 718,
			'NodeResNode' => '138',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Completed High School',
			'NodeResValue' => '241'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 719,
			'NodeResNode' => '138',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Some Undergraduate Education',
			'NodeResValue' => '243'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 720,
			'NodeResNode' => '138',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Completed Undergraduate Degree',
			'NodeResValue' => '242'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 721,
			'NodeResNode' => '138',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Some graduate school education',
			'NodeResValue' => '245'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 722,
			'NodeResNode' => '138',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Completed Masters degree',
			'NodeResValue' => '244'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 723,
			'NodeResNode' => '138',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Completed Doctoral degree',
			'NodeResValue' => '246'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 724,
			'NodeResNode' => '138',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Completed Associates degree',
			'NodeResValue' => '247'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 725,
			'NodeResNode' => '158',
			'NodeResEng' => 'Yes',
			'NodeResValue' => '248'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 726,
			'NodeResNode' => '158',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Sometimes',
			'NodeResValue' => '249'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 727,
			'NodeResNode' => '158',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Never',
			'NodeResValue' => '250'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 728,
			'NodeResNode' => '158',
			'NodeResOrd' => '3',
			'NodeResEng' => 'No',
			'NodeResValue' => '251'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 729,
			'NodeResNode' => '158',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '252'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 730,
			'NodeResNode' => '158',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Let me describe exactly how I use them',
			'NodeResValue' => '253',
			'NodeResShowKids' => '192'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 731,
			'NodeResNode' => '141',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 732,
			'NodeResNode' => '141',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 739,
			'NodeResNode' => '166',
			'NodeResEng' => '5 - Very likely',
			'NodeResValue' => '222'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 740,
			'NodeResNode' => '166',
			'NodeResOrd' => '1',
			'NodeResEng' => '4',
			'NodeResValue' => '223'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 741,
			'NodeResNode' => '166',
			'NodeResOrd' => '2',
			'NodeResEng' => '3 - Neutral/Not Sure',
			'NodeResValue' => '224'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 742,
			'NodeResNode' => '166',
			'NodeResOrd' => '3',
			'NodeResEng' => '2',
			'NodeResValue' => '225'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 743,
			'NodeResNode' => '166',
			'NodeResOrd' => '4',
			'NodeResEng' => '1 - Extremely Unlikely',
			'NodeResValue' => '226'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 744,
			'NodeResNode' => '333',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 745,
			'NodeResNode' => '333',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 746,
			'NodeResNode' => '333',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 747,
			'NodeResNode' => '345',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 748,
			'NodeResNode' => '345',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 749,
			'NodeResNode' => '345',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 750,
			'NodeResNode' => '365',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '366'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 751,
			'NodeResNode' => '365',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 752,
			'NodeResNode' => '368',
			'NodeResEng' => '501(c)3 Nonprofit',
			'NodeResValue' => '343'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 753,
			'NodeResNode' => '368',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Other Type',
			'NodeResValue' => '344'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 754,
			'NodeResNode' => '368',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Unknown',
			'NodeResValue' => '345'
		]);
	
	DB::table('SL_Conditions')->insert([
			'CondID' => 1,
			'CondDatabase' => '1',
			'CondTag' => '#ItemTravel',
			'CondDesc' => 'Current Item is Travel & Transportation',
			'CondOperDeet' => '0',
			'CondField' => '210',
			'CondTable' => '38',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 2,
			'CondDatabase' => '1',
			'CondTag' => '#ItemPhysical',
			'CondDesc' => 'Current Item is Physical Things Purchased',
			'CondOperDeet' => '0',
			'CondField' => '210',
			'CondTable' => '38',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 3,
			'CondDatabase' => '1',
			'CondTag' => '#ItemDigital',
			'CondDesc' => 'Current Item is Digital Things Used',
			'CondOperDeet' => '0',
			'CondField' => '210',
			'CondTable' => '38',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 4,
			'CondDatabase' => '1',
			'CondTag' => '#ItemCannabis',
			'CondDesc' => 'Current Item is Cannabis Things',
			'CondOperDeet' => '0',
			'CondField' => '210',
			'CondTable' => '38',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 5,
			'CondDatabase' => '1',
			'CondTag' => '#ItemTransport',
			'CondDesc' => 'Current Item is Transportation',
			'CondOperDeet' => '0',
			'CondField' => '210',
			'CondTable' => '38',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 19,
			'CondDatabase' => '1',
			'CondTag' => '#AccessPreOrder',
			'CondDesc' => 'Consumer accesses cannabis by pre-ordering from a dispensary.',
			'CondOperator' => '{{',
			'CondOperDeet' => '0',
			'CondField' => '317',
			'CondTable' => '52',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 20,
			'CondDatabase' => '1',
			'CondTag' => '#AccessDeliveryApp',
			'CondDesc' => 'Consumer accesses cannabis from a delivery app or website.',
			'CondOperator' => '{{',
			'CondOperDeet' => '0',
			'CondField' => '317',
			'CondTable' => '52',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 21,
			'CondDatabase' => '1',
			'CondTag' => '#AccessOnSite',
			'CondDesc' => 'Consumer accesses cannabis on-site at a dispensary.',
			'CondOperator' => '{{',
			'CondOperDeet' => '0',
			'CondField' => '317',
			'CondTable' => '52',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 24,
			'CondDatabase' => '1',
			'CondTag' => '#BusinessSurveyPublic',
			'CondDesc' => 'Current Business Survey is set to be shared publicly.',
			'CondOperDeet' => '0',
			'CondField' => '348',
			'CondTable' => '44',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
	
	DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 1,
			'CondValCondID' => '1',
			'CondValValue' => '16'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 2,
			'CondValCondID' => '2',
			'CondValValue' => '2'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 3,
			'CondValCondID' => '3',
			'CondValValue' => '3'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 4,
			'CondValCondID' => '4',
			'CondValValue' => '4'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 5,
			'CondValCondID' => '5',
			'CondValValue' => '1'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 6,
			'CondValCondID' => '19',
			'CondValValue' => '157'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 7,
			'CondValCondID' => '20',
			'CondValValue' => '158'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 8,
			'CondValCondID' => '21',
			'CondValValue' => '156'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 9,
			'CondValCondID' => '24',
			'CondValValue' => 'Y'
		]);
	
	DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 2,
			'CondNodeCondID' => '3',
			'CondNodeNodeID' => '0'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 3,
			'CondNodeCondID' => '3',
			'CondNodeNodeID' => '8'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 4,
			'CondNodeCondID' => '2',
			'CondNodeNodeID' => '0'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 5,
			'CondNodeCondID' => '2',
			'CondNodeNodeID' => '9'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 6,
			'CondNodeCondID' => '4',
			'CondNodeNodeID' => '10'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 7,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '14'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 8,
			'CondNodeCondID' => '5',
			'CondNodeNodeID' => '7'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 9,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '81'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 10,
			'CondNodeCondID' => '20',
			'CondNodeNodeID' => '82'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 11,
			'CondNodeCondID' => '21',
			'CondNodeNodeID' => '83'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 21,
			'CondNodeCondID' => '24',
			'CondNodeNodeID' => '328'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 22,
			'CondNodeCondID' => '24',
			'CondNodeNodeID' => '325'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 23,
			'CondNodeCondID' => '24',
			'CondNodeNodeID' => '327'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 24,
			'CondNodeCondID' => '24',
			'CondNodeNodeID' => '326'
		]);
	

	DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 2,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '2',
			'DataLoopPlural' => 'Log Items',
			'DataLoopSingular' => 'Log Item',
			'DataLoopTable' => 'Items'
		]);
	
	DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 1,
			'DataSubTree' => '16',
			'DataSubTbl' => 'BusinessTagLinks',
			'DataSubTblLnk' => 'BusTagLnkTagID',
			'DataSubSubTbl' => 'BusinessTags'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 2,
			'DataSubTree' => '21',
			'DataSubTbl' => 'BusinessInvites',
			'DataSubTblLnk' => 'BusInvUserID',
			'DataSubSubTbl' => 'Users'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 3,
			'DataSubTree' => '21',
			'DataSubTbl' => 'Business',
			'DataSubSubTbl' => 'BusinessInvites',
			'DataSubSubLnk' => 'BusInvBusinessID'
		]);
	
	DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 1,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerPurchase',
			'DataHelpKeyField' => 'ConPurchConID',
			'DataHelpValueField' => 'ConPurchWhatKinds'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 2,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerIssues',
			'DataHelpKeyField' => 'ConIsuConID',
			'DataHelpValueField' => 'ConIsuIssuesMatter'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 3,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessSectors',
			'DataHelpKeyField' => 'BusSectBusID',
			'DataHelpValueField' => 'BusSectSector'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 4,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessTagLinks',
			'DataHelpKeyField' => 'BusTagLnkBusID',
			'DataHelpValueField' => 'BusTagLnkTagID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 6,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerUse',
			'DataHelpKeyField' => 'ConUseConID',
			'DataHelpValueField' => 'ConUseUseID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 7,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerAccess',
			'DataHelpKeyField' => 'ComAccConID',
			'DataHelpValueField' => 'ComAccAccess'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 8,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessStates',
			'DataHelpKeyField' => 'BusStatBusID',
			'DataHelpValueField' => 'BusStatState'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 9,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessCSR',
			'DataHelpKeyField' => 'BusCsrBusID',
			'DataHelpValueField' => 'BusCsrPractice'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 10,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessNotCSR',
			'DataHelpKeyField' => 'BusCsrNotBusID',
			'DataHelpValueField' => 'BusCsrNotReason'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 11,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessES',
			'DataHelpKeyField' => 'BusEsBusID',
			'DataHelpValueField' => 'BusEsPractice'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 12,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessNotES',
			'DataHelpKeyField' => 'BusEsNotBusID',
			'DataHelpValueField' => 'BusEsNotReason'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 13,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerRoles',
			'DataHelpKeyField' => 'ConRolsConID',
			'DataHelpValueField' => 'ConRolsRole'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 14,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerCertifications',
			'DataHelpKeyField' => 'ConCertConID',
			'DataHelpValueField' => 'ConCertCertification'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 15,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerBrand',
			'DataHelpKeyField' => 'ConBrnConID',
			'DataHelpValueField' => 'ConBrnFamiliarize'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 16,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerAdvocates',
			'DataHelpKeyField' => 'ConAdvConID',
			'DataHelpValueField' => 'ConAdvAdvocate'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 17,
			'DataHelpTree' => '5',
			'DataHelpParentTable' => 'ConsumerSurvey',
			'DataHelpTable' => 'ConsumerSectors',
			'DataHelpKeyField' => 'ConSectConID',
			'DataHelpValueField' => 'ConSectSector'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 18,
			'DataHelpTree' => '16',
			'DataHelpParentTable' => 'Business',
			'DataHelpTable' => 'BusinessInvites',
			'DataHelpKeyField' => 'BusInvBusinessID'
		]);
	

 } } 