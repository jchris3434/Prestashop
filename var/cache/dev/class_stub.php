<?php

class TreeToolbar extends TreeToolbarCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class Tree extends TreeCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class Attribute extends AttributeCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class CustomizationField extends CustomizationFieldCore {};
class Combination extends CombinationCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class Curve extends CurveCore {};
class Risk extends RiskCore {};
class Feature extends FeatureCore {};
class Search extends SearchCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class FrontController extends FrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
abstract class Controller extends ControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class FileUploader extends FileUploaderCore {};
class QuickAccess extends QuickAccessCore {};
class Category extends CategoryCore {};
class RequestSql extends RequestSqlCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Media extends MediaCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class AddressChecksum extends AddressChecksumCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class Module extends ModuleCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class Employee extends EmployeeCore {};
class Dispatcher extends DispatcherCore {};
class CSV extends CSVCore {};
class Page extends PageCore {};
class CustomerMessage extends CustomerMessageCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class ProductAssembler extends ProductAssemblerCore {};
class Cart extends CartCore {};
class Zone extends ZoneCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxRule extends TaxRuleCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class Tax extends TaxCore {};
class Validate extends ValidateCore {};
class Product extends ProductCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Tab extends TabCore {};
class Configuration extends ConfigurationCore {};
class Cookie extends CookieCore {};
class ProductSale extends ProductSaleCore {};
class Pack extends PackCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class Tools extends ToolsCore {};
class Carrier extends CarrierCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class JsMinifier extends JsMinifierCore {};
class CccReducer extends CccReducerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
abstract class Db extends DbCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbPDO extends DbPDOCore {};
class DbQuery extends DbQueryCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
class FeatureValue extends FeatureValueCore {};
class AttributeGroup extends AttributeGroupCore {};
class OrderMessage extends OrderMessageCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderDetail extends OrderDetailCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderSlip extends OrderSlipCore {};
class OrderState extends OrderStateCore {};
class OrderReturn extends OrderReturnCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderDiscount extends OrderDiscountCore {};
class Order extends OrderCore {};
class Attachment extends AttachmentCore {};
class CustomerSession extends CustomerSessionCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Country extends CountryCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class FormField extends FormFieldCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class Gender extends GenderCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class CustomerAddress extends CustomerAddressCore {};
class DateRange extends DateRangeCore {};
class Tag extends TagCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class TemplateFinder extends TemplateFinderCore {};
class Supplier extends SupplierCore {};
class Manufacturer extends ManufacturerCore {};
class Link extends LinkCore {};
class CheckoutProcess extends CheckoutProcessCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class AddressValidator extends AddressValidatorCore {};
class Alias extends AliasCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class ImageType extends ImageTypeCore {};
class Upgrader extends UpgraderCore {};
class Context extends ContextCore {};
class Profile extends ProfileCore {};
class Delivery extends DeliveryCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheApc extends CacheApcCore {};
class CacheXcache extends CacheXcacheCore {};
abstract class Cache extends CacheCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class MetaLang extends MetaLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class GenderLang extends GenderLangCore {};
class GroupLang extends GroupLangCore {};
class TabLang extends TabLangCore {};
class ContactLang extends ContactLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class CarrierLang extends CarrierLangCore {};
class CategoryLang extends CategoryLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class AttributeLang extends AttributeLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class DataLang extends DataLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class FeatureLang extends FeatureLangCore {};
class RiskLang extends RiskLangCore {};
class ProfileLang extends ProfileLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class ThemeLang extends ThemeLangCore {};
class Address extends AddressCore {};
class StockMvt extends StockMvtCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockMvtReason extends StockMvtReasonCore {};
class Warehouse extends WarehouseCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrder extends SupplyOrderCore {};
class StockMvtWS extends StockMvtWSCore {};
class Stock extends StockCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class CMSCategory extends CMSCategoryCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Mail extends MailCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class Customer extends CustomerCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class GroupReduction extends GroupReductionCore {};
class CMS extends CMSCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Store extends StoreCore {};
class Language extends LanguageCore {};
class LocalizationPack extends LocalizationPackCore {};
class SearchEngine extends SearchEngineCore {};
class Customization extends CustomizationCore {};
class Message extends MessageCore {};
class Translate extends TranslateCore {};
class Image extends ImageCore {};
class HelperShop extends HelperShopCore {};
class HelperKpi extends HelperKpiCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperList extends HelperListCore {};
class HelperUploader extends HelperUploaderCore {};
class Helper extends HelperCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperView extends HelperViewCore {};
class HelperForm extends HelperFormCore {};
class Connection extends ConnectionCore {};
class Access extends AccessCore {};
class CMSRole extends CMSRoleCore {};
class Contact extends ContactCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class ProductDownload extends ProductDownloadCore {};
class AddressFormat extends AddressFormatCore {};
class State extends StateCore {};
class Notification extends NotificationCore {};
class SpecificPrice extends SpecificPriceCore {};
abstract class ObjectModel extends ObjectModelCore {};
class Guest extends GuestCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class Windows extends WindowsCore {};
class Referrer extends ReferrerCore {};
class Group extends GroupCore {};
class CustomerThread extends CustomerThreadCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class EmployeeSession extends EmployeeSessionCore {};
class ProductSupplier extends ProductSupplierCore {};
class SupplierAddress extends SupplierAddressCore {};
class Currency extends CurrencyCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class LinkProxy extends LinkProxyCore {};
class Hook extends HookCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Chart extends ChartCore {};
class Uploader extends UploaderCore {};
class CartRule extends CartRuleCore {};
class FileLogger extends FileLoggerCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class Meta extends MetaCore {};
class ImageManager extends ImageManagerCore {};
